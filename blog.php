<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Blog | Bowerman Digital';
    $page_decription = 'Look at all these blogs!';
    $page_name = '/blog';
    include ('inc/head.php');
    include ('inc/schema.php');
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
      <section class="hero" id="portHero">
        <section class="portfolioContainer">
          <h1>Blog Posts <span class="flash">|</span></h1>
          <p>The place for our articles. All in one convinient place!</p>
          <section class="btnssss">
            <section class="portfolioBtn">
              <a href="https://bowermandigital.com/contact">
                <div class="glow-on-hover"><p>Read the latest</p></div>
              </a>
            </section>
          </section>
        </section>
      </section>
    </section>

    <section class="contactIndexContainer">
      <section class="contactIndexContainerTitle">
        <h2 id="inTouchTitle">Get in touch</h2>
        <p>What are you waiting for? Click the button below to get to our contact form!</p>
        <img src="icons/arrow.svg" class="downArrow" alt="Arrow pointing to the contact form">
        <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/contact">
            <div class="glow-on-hover"><p>Contact us today</p></div>
          </a>
        </section>
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