<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Bowerman Digital: Web Development & SEO Experts';
    $page_decription = 'Empowering Australian businesses with modern web development and SEO strategies. Build, optimize, and grow your online presence with Bowerman Digital.';
    $page_name = '/';
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
      <section class="hero">
        <section class="initalImgMobileContainer">
          <img class="initalImgMobile" src="img/mockups/evie-mobile2.webp" alt="Evie Bowerman portfolio website">
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
          <img class="mobileMockEvie" src="img/mockups/evie-mobile.webp" alt="eviebowerman.com iPhone mockup">
        </section>
      </section>
    </section>


    <!-- Portfilio Section -->
    
    <section class="portfolioIndexContainer ">
      <h2>Our work so far</h2>
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


    <!-- About Section -->
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
          <a href="https://bowermandigital.com/about">
            <div class="glow-on-hover"><p>Learn about our story</p></div>
          </a>
        </section>
      </section>
    </section>

    <section class="contactIndexContainer">
      <section class="contactIndexContainerTitle">
        <h2>Get in touch</h2>
        <p class="subHeading">Fill up the form below to send us a message.</p>
      </section>
      <section class="formContainer">
        <form action="https://api.web3forms.com/submit" method="POST" id="form" class="needs-validation formStyle" novalidate>
          <input type="hidden" name="access_key" value="d7489182-19e2-45f3-a751-884085b8df59" />
          <input type="hidden" name="subject" value="Bowerman Digital form submission" />
          <input type="checkbox" name="botcheck" id="" style="display: none;" />

            <input type="text" name="name" id="name" placeholder="John Smith" required class="formInput" />
            <input type="email" name="email" id="email" placeholder="you@company.com" required class="formInput" />
          </div>
          <div class="formInputDiv">
            <input type="text" name="phone" id="phone" placeholder="+61 456 665 554" required class="formInput" />
            <textarea rows="5" name="message" id="message" placeholder="Your Message" class="formInputMsg" required></textarea>
          <div class="formBtnContainer">
            <button type="submit" id="formBtn" class="glow-on-hover formBtn">
              Send Message
            </button>
          </div>
          <p id="result"></p>
        </form>
      </section>
    </section>
  </main>

  <footer>
    <?php include ('inc/footer.php');?>
  </footer>

  <script type="text/javascript">
    <?php include ('inc/js.php');?>
  </script>
</body>
</html>