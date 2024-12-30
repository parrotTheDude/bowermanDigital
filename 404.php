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
      <section class="hero" id="lostHero">
        <section class="lostTop">
          <h1>This page seems to have been misplaced!</h1>
          <p>No worries! Here are some quick links to get you moving.</p>
        </section>
        <section class="404Links">
          <section class="btnContainer" id="aboutBtn">
            <a href="https://bowermandigital.com/portfolio">
              <div class="glow-on-hover"><p>Portfolio</p></div>
            </a>
          </section>
          <section class="btnContainer" id="aboutBtn">
            <a href="https://bowermandigital.com/blog">
              <div class="glow-on-hover"><p>Blog</p></div>
            </a>
          </section>
          <section class="btnContainer" id="aboutBtn">
            <a href="https://bowermandigital.com/contact">
              <div class="glow-on-hover"><p>Contact</p></div>
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
</body>
</html>