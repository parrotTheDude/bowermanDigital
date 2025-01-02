<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  use Postmark\PostmarkClient;

  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $postmarkToken = POSTMARK_TOKEN;

    $client = new PostmarkClient("ef0550a8-e646-4936-a3e4-41e9a546949c");
    $fromEmail = $email;
    $toEmail = "hello@bowermandigital.com";
    $subject = $name . " contact form!";
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
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Thanks for getting in touch | Bowerman Digital';
    $page_decription = 'Build, optimize, and grow your online presence by getting in touch today!';
    $page_name = '/thank-you';
    include ('inc/head.php');
  ?>
</head>

<body id="top">
  <header id="header">
    <?php include ('inc/header.php'); ?>
  </header>

  <main>
    <section class="landingContainer">
      <!-- Fancy Background -->
      <section class="el">
      </section>

      <!-- Hero Div -->
      <section class="hero" id="contactHero">
        <section class="lostTop">
          <h1>Thanks for getting in touch <?php echo $name; ?></h1>
          <p>We will be in touch soon.</p>
        </section>
        <section class="formContainer">
          
          <p>Here are your message details:</p>

          <p>Email: <?php echo $email; ?></p>
          <p>Telephone: <?php echo $phone; ?></p>
          <p>Message: <?php echo $message; ?></p>
          
        </section>
      </section>
    </section>
  </main>

 <footer>
    <?php include ('inc/footer.php');?>
  </footer>

  <script type="text/javascript">
    <?php include ('inc/js.php');?>
  </script>
  
  <?php include ('inc/simpleAnalytics.php');?>
</body>
</html>