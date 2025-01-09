<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Web Development & SEO Agency | Bowerman Digital';
    $page_decription = "We don't work for your competitors. We are a small digital agency located in Sydney, who decides to grow your business over the rest. It's simple as that.";
    $page_name = '/';
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
      <section class="hero">
        <section class="initalImgMobileContainer">
          <a href="https://bowermandigital.com/evie-graphic-design">
            <img class="initalImgMobile" src="img/mockups/evie-mobile2.webp" alt="Evie Bowerman portfolio website">
          </a>
        </section>

        <section class="heroContainer">
          <h1>Build, optimize, and grow your online presence <span class="flash">|</span></h1>
          <p class="hideMobile">Welcome to Bowerman Digital 🤘🏼 Based in Sydney, we specialize in creating modern, user-focused websites and strategies tailored to elevate your business.</p>
          <p class="hideMobile">Know what you're looking for? Submit a short brief below to get started.</p>
          <section class="btnssss">
            <section class="btnContainer">
              <a href="https://bowermandigital.com/contact">
                <div class="glow-on-hover"><p>Get in touch</p></div>
              </a>
            </section>
          </section>
        </section>

        <section class="portfolioSlide">
          <a href="https://bowermandigital.com/evie-graphic-design">
            <img class="mobileMockEvie" src="img/mockups/evie-mobile.webp" alt="eviebowerman.com iPhone mockup"></a>
        </section>
      </section>
    </section>


    <!-- Portfilio Section -->
    <section class="portfolioIndexContainer ">
      <h2>Our work so far</h2>
      <p>Here are some of our project so far. Feel free to check out what we did with each project</p>
      <section class="contentContainer glow-on-hover">
        <section class="imgContentContainer">
          <img src="img/tdac.webp" alt="TDAC Promotional Picture" class="imgClassContentContainer">
        </section>
        <section class="titleContentContainer">
          <h3>That Disability Adventure Company</h3>
          <p>TDAC is an NDIS disability service provider located in Melbourne and Gippsland. They provide services for those dealing with a range of disabilities to lead fulfilling lives and develop independent living skills</p>
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
          <p>Evie is a recent graduate of graphic design out of Northumbria University. She reached out for us to build her a website to display her digital portfolio to help her get work and show off her projects</p>
        </section>
        <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/evie-graphic-design">
            <div class="glow-on-hover"><p>Evie's Journey</p></div>
          </a>
        </section>
      </section>
    </section>


    <!-- Services Section -->
    <section class="aboutIndexContainer">
      <!-- Fancy Background -->
      <section class="el" id="portfolioIndex">
      </section>
      <h2>Experts in digital experiences</h2>
      <p class="subHeading">From custom websites to seamless SEO strategies, we craft digital experiences that inspire</p>
      <section class="gloatContainer">
        <aside class="valueContainer">
          <img class="icon" alt="Simple Icon" src="icons/simplify.svg">
          <h3>Simple</h3>
          <p>We focus on simplicity, making it easy for clients to manage, grow, and succeed online.</p>
        </aside>
        <aside class="valueContainer">
          <img class="icon" alt="Quality Icon" src="icons/quality.svg">
          <h3>Quality</h3>
          <p>Delivering exceptional quality in every project, ensuring your brand shines in the digital world.</p>
        </aside>
        <aside class="valueContainer">
          <img class="icon" alt="Reliable Icon" src="icons/handshake.svg">
          <h3>Reliable</h3>
          <p>Count on us for reliable solutions that keep your business running smoothly and efficiently online.</p>
        </aside>
      </section>
      <section class="btnContainer" id="aboutBtn">
          <a href="https://bowermandigital.com/services">
            <div class="glow-on-hover"><p>Learn about our services</p></div>
          </a>
        </section>
      </section>
    </section>

    <!-- Blog Section -->
    <!-- <section class="portfolioIndexContainer ">
      <h2>Check our our latest blogs!</h2>
      <p>Bloggy bloggy blog blog</p>
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
    </section> -->

    <section class="contactIndexContainer">
      <section class="contactIndexContainerTitle">
        <h2>Get in touch</h2>
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