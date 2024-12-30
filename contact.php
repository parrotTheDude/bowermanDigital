<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Contact | Bowerman Digital';
    $page_decription = 'Build, optimize, and grow your online presence by getting in touch today!';
    $page_name = '/contact';
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
          <h1>It's time to create something special, together.</h1>
          <p>Fill out the contact form below to get started on your new digital journey.</p>
          <p>Include a brief description of what you're looking for and one of our team members will reach out.</p>
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