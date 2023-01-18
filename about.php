<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'components/head.php'; ?>
    <title>About - Totebag Shop</title>
  </head>
  <body>
    <!-- ====================== NAVBAR ====================== -->
    <?php include 'components/navbar.php'; ?>

    <!-- ====================== MAIN ====================== -->
    <main class="main position-relative about">
      <!-- ====================== JUMBOTRON ====================== -->
      <section class="jumbotron d-flex flex-row justify-content-between align-items-center container">
        <img
          src="src/assets/jumbotron_about.png"
          alt="Jumbotron's Image"
          class="jumbotron-img img-fluid"
          data-aos="zoom-in"
          data-aos-duration="1000"
        />
        <article class="jumbotron-description ms-5 d-flex flex-column">
          <h1 class="jumbotron-title">
            About
          </h1>
          <p class="mt-4 lh-lg">
            Our founding father, Arni started with only two sewing machines.
            With perseverance and an explorative spirit, we keep growing and
            growing! while we continue to do so, we also realize that everything
            changes and evolves, even us! We have change our style through the
            years, from classic campus life (1979-2004) to sporty masculine
            (2005-2006) to sporty casual (2007-2009) to cheerful fiminine with
            patterns to minimalistic and so on. But it seems like there is this
            one thing taht got preserved as our core even through generations
            and personas. They all come from one core soul that is the
            Explorers! So, after years of existing, we question our self: who
            are we in this meaningful journey of life? We love to explore, we
            are curious, we are dynamic and it's fantastic!
          </p>
        </article>
      </section>
    </main>

    <!-- ====================== JS ====================== -->
    <?php include 'components/scripts.php'; ?>

    <!-- ====================== MODAL AUTH ====================== -->
    <?php 
      if (!isset($_SESSION['login'])) {
        include 'components/modal_login.php';
        include 'components/modal_register.php';
      }
    ?>
  </body>
</html>
