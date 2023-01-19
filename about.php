<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- =========== IMPORT COMPONENT HEAD =========== -->
    <?php include 'components/head.php'; ?>
    
    <!-- =================== TITLE =================== -->
    <title>About - Totebag Shop</title>
  </head>

  <body>

    <!-- =========== IMPORT COMPONENT NAVBAR =========== -->
    <?php include 'components/navbar.php'; ?>

    <!-- ==================== MAIN ===================== -->
    <main class="main position-relative about">

      <!-- ==================== JUMBOTRON ==================== -->
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

      <!-- ==================== PROFILE ==================== -->
      <section class="product section container" id="products" style="margin-bottom: 3rem;">
        <h1 class="title" data-aos="zoom-in-up" data-aos-duration="500">Profile of Website Owner</h1>

        <div class="card w-75 mt-3 p-4">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center">
              <img src="src/assets/arni.jpeg" width="250" style="border-radius: 25px" />
              <h5 class="card-title mt-3">Arni Eriza</h5>
            </div>
           
            <ul class="list-group">
              <li class="list-group-item">Nama : Arni Eriza</li>
              <li class="list-group-item">Kelas : 5NG</li>
              <li class="list-group-item">Npm : 062030601542</li>
              <li class="list-group-item">Email : arnieriza62@gmail.com</li>
              <li class="list-group-item">Jurusan : Administrasi Bisnis</li>
              <li class="list-group-item">Universitas : Politeknik Negeri Sriwijaya</li>
            </ul>
          </div>
        </div>

      </section>

      <!-- ======================= FOOTER ==================== -->
      <footer class="footer footer-dark">
        Copyright 2023. All Rights Reserved Totebag by Arni.
      </footer>

      
    </main>

    <!-- =========== IMPORT COMPONENT SCRIPTS ========== -->
    <?php include 'components/scripts.php'; ?>

    <!-- ===== IMPORT MODAL AUTH (LOGIN / REGISTER) ==== -->
    <?php
// CEK APAKAH SESSION LOGIN TIDAK ADA, JIKA TIDAK ADA
// CEK APAKAH SESSION LOGIN TIDAK ADA, JIKA TIDAK ADA
?>// MAKA IMPORT MODAL AGAR USER DAPAT MELAKUKAN LOGIN / REGISTER
    if (!isset($_SESSION['login'])) {
        include 'components/modal_login.php';
        include 'components/modal_register.php';
    } ?>

  </body>

</html>
