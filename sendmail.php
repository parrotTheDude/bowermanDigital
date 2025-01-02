<?php

// Import the Postmark Client Class:
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

$client = new PostmarkClient("413f9fcc-1497-40a5-8ed4-6bcc2ac1da30");
$fromEmail = "hello@bowermandigital.com";
$toEmail = "hello@bowermandigital.com";
$subject = "Hello from Postmark";
$htmlBody = "<strong>Hello</strong> dear Postmark user.";
$textBody = "Hello dear Postmark user.";
$tag = "example-email-tag";
$trackOpens = true;
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

?>
