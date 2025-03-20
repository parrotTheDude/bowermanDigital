<?php

session_start();
require_once('./vendor/autoload.php');
require_once('inc/variables.php');
require_once('inc/db-connect.php');

db_connect();

use Postmark\PostmarkClient;
use Postmark\Models\PostmarkAttachment;

$status = false;

if(isset($_POST['submit'])) {
    // Honeypot Check (Bots fill this, real users don’t)
    if (!empty($_POST['website']) || !empty($_POST['hiddenField'])) {
        die('Spam detected. Submission blocked.');
    }

    // Rate Limiting (Prevent rapid submissions)
    if (!isset($_SESSION['last_submission'])) {
        $_SESSION['last_submission'] = time();
    } else {
        if (time() - $_SESSION['last_submission'] < 30) { // 30 seconds cooldown
            die('Too many submissions. Please wait.');
        }
        $_SESSION['last_submission'] = time();
    }

    // Clean input
    $name = ucwords(strtolower($_POST['name']));
    $email = str_replace(' ', '', strtolower($_POST['email']));
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $message = $_POST['message'];
    $dateCreated = date("Y-m-d H:i:s", time());
    $hash = $name . $dateCreated;
    $id = hash('sha256', $hash);
    $emailValid = 0;

    // Insert into database
    $sql_statement = "
    INSERT INTO users (id, name, email, phone, message, emailValid, dateCreated) 
    VALUE ('$id', '$name', '$email', '$phone', '$message', '$emailValid', '$dateCreated')";

    $users = $db_link->query($sql_statement) or die($db_link->error);

    // Email Validation & Sending
    $postmarkToken = POSTMARK_TOKEN;

    if (preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $client = new PostmarkClient($postmarkToken);
            $templateId = 38566274;
            $fromEmail = "hello@bowermandigital.com";
            $toEmail = $email;
            $subject = $name . " wants to get in contact.";
            $htmlBody = "<strong>Hello!</strong> My name is " . $name . ". <br /><br />Email: " . $email . "<br />Phone: " . $phone . "<br /><br />Message:<br />" . $message;
            $textBody = "Hello! My name is " . $name  . ".Email: " . $email . "Phone: " . $phone . "Message:" . $message;;
            $tag = "contact-form-enquiry";
            $trackOpens = false;
            $trackLinks = "None";
            $messageStream = "outbound";

            // Send email to the user
            $sendResult = $client->sendEmailWithTemplate(
                $fromEmail,
                $toEmail,
                $templateId,
                ["product_url" => "https://bowermandigital.com", 
                "product_name" => "Bowerman Digital",
                "name" => $name, 
                "sender_name" => "Jacob",
                "company_name" => "Sydney",
                "company_address" => "Australia"],
                true, "enquiry-confirmation", true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
            );

            // Send email to the site owner
            $toEmail = "hello@bowermandigital.com";
            $sendResult = $client->sendEmail(
                $fromEmail, $toEmail, $subject, $htmlBody, $textBody, $tag, $trackOpens, NULL, NULL, NULL, NULL, NULL, $trackLinks, NULL, $messageStream
            );
            $status = true;
        }
    } else {
        $status = false;
    }
}