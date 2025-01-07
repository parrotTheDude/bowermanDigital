<?php include ('inc/sendmail.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'That Disability Adventure Company | Bowerman Digital';
    $page_decription = 'TDACS portfolio';
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
      <section class="hero" id="portHero">
        <section class="sectionsContainer">
          <section class="portfolioWorkContainer">
            <h1>That Disability Adventure Company <span class="flash">|</span></h1>
            <p>TDAC is an NDIS disability service provider located in Melbourne and Gippsland. They provide services for those dealing with a range of disabilities to lead fulfilling lives and develop independent living skills</p>
          </section>
          <section class="detailsContainer">
            <section>
              <p>Live link: <a href="https://thatdisabilityadventurecompany.com.au/">thatdisabilityadventurecompany.com.au</a></p>
              <p>Industry we helped: Disability and Health</p>
              <p>How we helped: SEO Optimization, Website Development, Ongoing Support and Maintainence, Digital Design</p>
            </section>
          </section>
        </section>
      </section>
    </section>

    <!-- Portfilio Section -->
    <section class="portfolioIndexContainer">
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
      <section class="contentContainer glow-on-hover">
        <section class="imgContentContainer">
          <img src="img/evie.webp" alt="Evie Bowerman Promotional Picture" class="imgClassContentContainer">
        </section>
        <section class="titleContentContainer">
          <h2 id="evieTitle"">Evie's Graphics Portfolio</h2>
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