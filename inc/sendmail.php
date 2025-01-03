<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  use Postmark\PostmarkClient;
  use Postmark\Models\PostmarkAttachment;
  $status = false;

  if(isset($_POST['submit'])) {
    $name = ucfirst(strtolower($_POST['name']));
    $email = str_replace(' ', '', strtolower($_POST['email']));
    $phone = preg_replace("/[^0-9]/", '', $_POST['phone']);
    $message = $_POST['message'];
    $dateCreated = date("Y-m-d H:i:s", time());
    $hash = $name . $dateCreated;
    $id = hash('sha256', $hash);
    $emailValid = 0;

    $sql_statement = "
    INSERT INTO users (id, name, email, phone, message, emailValid, dateCreated) 
    VALUE ('$id', '$name', '$email', '$phone', '$message', '$emailValid', '$dateCreated')";

    $users = $db_link->query($sql_statement) or die($db_link->error);

    $postmarkToken = POSTMARK_TOKEN;

    if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
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

        // Send an email to client to confirm:
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
          true, // Inline CSS
          "enquiry-confirmation", // Tag
          true, // Track opens
          NULL, // Reply To
          NULL, // CC
          NULL, // BCC
          NULL, // Header array
          NULL, // Attachment array
          NULL, // Track links
          NULL, // Metadata array
          NULL // Message stream
        );

        $toEmail = "hello@bowermandigital.com";

        // Send an email to me about contact information
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