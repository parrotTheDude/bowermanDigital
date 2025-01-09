<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Evie Graphic Design | Bowerman Digital';
    $page_decription = "Showcase page for Evie's Graphic Design website.";
    $page_name = '/evie-graphic-design';
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
      <section class="hero" id="workHero">
        <section class="sectionsContainer">
          <section class="portfolioWorkContainer">
            <h1 class="noMargin">Evie Graphic Design Portfolio <span class="flash">|</span></h1>
            <p>Evie is a recent graduate of graphic design out of Northumbria University. She reached out for us to build her a website to display her digital portfolio to help her get work and show off her projects</p>
          </section>
          <section class="detailsContainer">
            <section class="detailsContainerText">
              <p>Live link: <a class="workLink" target="_blank" href="https://eviebowerman.com/">eviebowerman.com</a></p>
              <p>Industry we helped:<br /><span class="workLink">Digital Design</span></p>
              <p>How we helped:<br /><span class="workLink">SEO Optimization</span>, <span class="workLink">Website Development</span>, <span class="workLink">Ongoing Support and Maintainence</span>, <span class="workLink">Digital Design</span></p>
            </section>
          </section>
        </section>
      </section>
    </section>

    <section class="workContentContainer">
      <section class="workContent">
        <h2>The challenge</h2>
        <p>Evie wanted a simple platform to showcase her work. It didn't need any fancy bells or whistles. Simply a place to click on each project and show what she can do. She wanted to make sure the website was fully optimised for both desktop and mobile to ensure all viewers could optimally see her work</p>
      </section>

      <section class="imgHolder">
        <img src="img/evie.webp" alt="Evie's display image">
      </section>

      <section class="workContent">
        <h2>What we did</h2>
        <p>We redesigned the website from the ground up ensuring we optimised every component to get the best scores for Google and other search engines.</p>
      </section>

      <section class="imgHolder">
        <img src="img/evieScreenGrab.webp" alt="TDAC website screenshot">
      </section>

      <section class="workContent">
        <h2>The result</h2>
        <p>A new, clear website for Evie and the world to enjoy.</p>
      </section>
    </section>

    <!-- Portfilio Section -->
    <section class="portfolioIndexContainer">
      <h2>Check out some of our other work</h2>
      <section class="contentContainer glow-on-hover">
        <section class="imgContentContainer">
          <img src="img/tdac.webp" alt="TDAC Promotional Picture" class="imgClassContentContainer">
        </section>
        <section class="titleContentContainer">
          <h2 id="tdacTitle">That Disability Adventure Company</h2>
          <p>Website rebuild & SEO optimisation</p>
        </section>
        <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/that-disability-adventure-company">
            <div class="glow-on-hover"><p>More on project TDAC</p></div>
          </a>
        </section>
      </section>
    </section>

    <section class="contactIndexContainer">
      <section class="contactIndexContainerTitle">
        <h2 id="inTouchTitle">Interested in working with us?</h2>
        <p class="subHeading">Click the button below to get to our contact form.</p>
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