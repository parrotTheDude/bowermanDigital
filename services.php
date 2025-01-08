<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'services | Bowerman Digital';
    $page_decription = 'All our available services';
    $page_name = '/services';
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
          <h1>Digital Services <span class="flash">|</span></h1>
          <p>All of our digital agency services we provide are detailed below</p>
          <section class="btnssss">
            <section class="portfolioBtn">
              <a href="https://bowermandigital.com/contact">
                <div class="glow-on-hover"><p>Get in touch</p></div>
              </a>
            </section>
          </section>
        </section>
      </section>
    </section>

    <!-- Services Container -->
    <section class="servicesHero">
      <section class="servicesContainer">
        <section class="service">
          <script type="module" src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>
          <dotlottie-player autoplay loop mode="normal"
            src="test.lottie"
            style="width: 320px;height:320px;">  
          </dotlottie-player>
          <h2>web design</h2>
          <p>tehc thech heaioewsndjoipa</p>
        </section>
        <section class="service">
          <h2>web design</h2>
          <p>tehc thech heaioewsndjoipa</p>
        </section>
        <section class="service">
          <h2>web design</h2>
          <p>tehc thech heaioewsndjoipa</p>
        </section>
        <section class="service">
          <h2>web design</h2>
          <p>tehc thech heaioewsndjoipa</p>
        </section>
      </section>
    </section>

    <section class="contactIndexContainer">
      <section class="contactIndexContainerTitle">
        <h2 id="inTouchTitle">Get in touch</h2>
        <p class="subHeading">What are you waiting for? Click the button below to get to our contact form!</p>
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