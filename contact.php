<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $page_title = 'Contact | Bowerman Digital';
    $page_decription = 'Get in contact with us, and begin your digital journey today!';
    $page_name = '/contact';
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
      <section class="hero" id="contactHero">
        <section class="lostTop">
          <h1>It's time to create something special together.</h1>
          <p>Fill out the contact form below to get started on your new digital journey.</p>
          <p>Include a brief description of what you're looking for and one of our team members will reach out.</p>
        </section>
        <section class="formContainer">
          <form action="thank-you" method="POST" id="form" class="formStyle">
              <input type="text" name="name" id="name" placeholder="John Smith" required class="formInput" />
              <input type="email" name="email" id="email" placeholder="you@company.com" required class="formInput" />
            </div>
            <div class="formInputDiv">
              <input type="number" name="phone" id="phone" title="Australian number must be 10 digits long. Format like this example: 0456654456" placeholder="0456665554" required class="formInput" />

              <textarea rows="5" name="message" id="message" form="form" placeholder="Your Message" class="formInputMsg" required></textarea>
            <div class="h-captcha" data-sitekey="685e80e4-7d9c-42fe-b4aa-b46c61f8e8cc"></div>
            <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
            <div class="formBtnContainer">
              <button type="submit" name="submit" id="formBtn" class="glow-on-hover formBtn">
                Send Message
              </button>
            </div>
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

  <script>
  const form = document.getElementById('form');

  form.addEventListener('submit', function(e) {

      const hCaptcha = form.querySelector('textarea[name=h-captcha-response]').value;

      if (!hCaptcha) {
          e.preventDefault();
          alert("Please fill out captcha field")
          return
      }
  });
  </script>
  
  <?php include ('inc/simpleAnalytics.php');?>
</body>
</html>