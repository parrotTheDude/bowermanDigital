<?php include ('inc/sendmail.php'); ?>
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
          <br />
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