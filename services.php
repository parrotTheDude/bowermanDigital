<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Digital Services | Bowerman Digital';
    $page_decription = 'This is a page to display all of our available services.';
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
          <img class="serviceIcon" src="icons/webDev.svg" alt="Support Icon">
          <h2>Website Development</h2>
          <p>Your website is often the first experience people have with your brand. Make your first impression count.</p>
        </section>
        <section class="service">
          <img class="serviceIcon" src="icons/seo.svg" alt="SEO Icon">
          <h2>SEO Optimization</h2>
          <p>Developing a strong SEO strategy for your website can change the game. Making your website go from ticking along to a global force.</p>
        </section>
        <section class="service">
          <img class="serviceIcon" src="icons/support.svg" alt="Support Icon">
          <h2>Ongoing Support and Maintainence</h2>
          <p>Continuing to work with us beyond the delivery of a single project can have significant advantages in terms of protecting and optimising your digital assets.</p>
        </section>
        <section class="service">
          <img class="serviceIcon" src="icons/design.svg" alt="Design Icon">
          <h2>Digital Design</h2>
          <p>Our award winning design team adopts a user-centric approach when designing digital services and products.</p>
        </section>
      </section>
    </section>

    <!-- Portfilio Section -->
    <section class="portfolioIndexContainer ">
      <h2>Proof of what we can do</h2>
      <section class="contentContainer glow-on-hover">
        <section class="imgContentContainer">
          <img src="img/tdac.webp" alt="TDAC Promotional Picture" class="imgClassContentContainer">
        </section>
        <section class="titleContentContainer">
          <h3>That Disability Adventure Company</h3>
        </section>
        <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/that-disability-adventure-company">
            <div class="glow-on-hover"><p>TDAC's Journey</p></div>
          </a>
        </section>
      </section>
      <section class="contentContainer glow-on-hover">
        <section class="imgContentContainer">
          <img src="img/evie.webp" alt="Evie Bowerman Promotional Picture" class="imgClassContentContainer">
        </section>
        <section class="titleContentContainer">
          <h3>Evie's Graphics Portfolio</h3>
        </section>
        <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/evie-graphic-design">
            <div class="glow-on-hover"><p>Evie's Journey</p></div>
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