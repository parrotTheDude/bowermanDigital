<?php include ('inc/sendmail.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'That Disability Adventure Company | Bowerman Digital';
    $page_decription = "This is the showcase page for TDAC's website. A project we did to fully redesign their website.";
    $page_name = '/that-disability-adventure-company';
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
            <h1 class="noMargin">That Disability Adventure Company <span class="flash">|</span></h1>
            <p>TDAC is an NDIS disability service provider located in Melbourne and Gippsland. They provide services for those dealing with a range of disabilities to lead fulfilling lives and develop independent living skills</p>
          </section>
          <section class="detailsContainer">
            <section class="detailsContainerText">
              <p>Live link: <a class="workLink" target="_blank" href="https://thatdisabilityadventurecompany.com.au/">thatdisabilityadventurecompany</a></p>
              <p>Industry we helped:<br /><span class="workLink">Disability and Health</span></p>
              <p>How we helped:<br /><span class="workLink">SEO Optimization</span>, <span class="workLink">Website Development</span>, <span class="workLink">Ongoing Support and Maintainence</span>, <span class="workLink">Digital Design</span></p>
            </section>
          </section>
        </section>
      </section>
    </section>

    <section class="workContentContainer">
      <section class="workContent">
        <h2>The challenge</h2>
        <p>That Disability Adventure Company came to us with an issue. Their current website was broken. Content was all over the place and the website lacked a proper flow. On top of that, there was no SEO optimisation which was paramount for TDAC.</p>
        <p>The team tasked us with a full website redesign to drive home their brand identity as well as allow a clear display of their products. They wanted the website to work quickly and functionally across all devices and browsers. They also wanted a easy to use contact form.</p>
      </section>

      <section class="imgHolder">
        <img src="img/tdac.webp" alt="TDAC's display image">
      </section>

      <section class="workContent">
        <h2>What we did</h2>
        <p>We redesigned the website from the ground up ensuring we optimised every component to get the best scores for Google and other search engines.</p>
      </section>

      <section class="imgHolder">
        <img src="img/tdacWebScreenGrab.webp" alt="TDAC website screenshot">
      </section>

      <section class="workContent">
        <h2>The result</h2>
        <p>A new, clear website for Tdac to enjoy and all the people too</p>
      </section>
    </section>

    <!-- Portfilio Section -->
    <section class="portfolioIndexContainer">
      <h2>Check out some of our other work</h2>
      <section class="contentContainer glow-on-hover">
        <section class="imgContentContainer">
          <img src="img/evie.webp" alt="Evie Bowerman Promotional Picture" class="imgClassContentContainer">
        </section>
        <section class="titleContentContainer">
          <h2 id="evieTitle">Evie's Graphics Portfolio</h2>
          <p>Website rebuild</p>
        </section>
        <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/evie-graphic-design">
            <div class="glow-on-hover"><p>More on project Evie</p></div>
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