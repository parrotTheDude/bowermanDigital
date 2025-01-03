<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  use Postmark\PostmarkClient;
  $status = false;

  if(isset($_POST['submit'])) {
    $name = ucfirst(strtolower($_POST['name']));
    $email = str_replace(' ', '', strtolower($_POST['email']));
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $message = $_POST['message'];

    $postmarkToken = POSTMARK_TOKEN;

    if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $client = new PostmarkClient($postmarkToken);
        $fromEmail = "hello@bowermandigital.com";
        $toEmail = "hello@bowermandigital.com";
        $subject = $name . " wants to get in contact.";
        $htmlBody = "<strong>Hello!</strong> My name is " . $name . ". <br /><br />Email: " . $email . "<br />Phone: " . $phone . "<br /><br />Message:<br />" . $message;
        $textBody = "Hello! My name is " . $name  . ".Email: " . $email . "Phone: " . $phone . "Message:" . $message;;
        $tag = "contact-form-enquiry";
        $trackOpens = false;
        $trackLinks = "None";
        $messageStream = "outbound";

        // Send an email:
        $sendResult = $client->sendEmail(
          $fromEmail,
          $toEmail,
          $subject,
          $htmlBody,
          $textBody,
          $tag,
          $trackOpens,
          NULL, // Reply To
          NULL, // CC
          NULL, // BCC
          NULL, // Header array
          NULL, // Attachment array
          $trackLinks,
          NULL, // Metadata array
          $messageStream
        );
        $status = true;
      }
    } else {
      $status = false;
    }
  }