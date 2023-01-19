<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- =========== IMPORT COMPONENT HEAD =========== -->
    <?php include 'components/head.php'; ?>

    <!--=============== REMIX ICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <!-- =================== TITLE =================== -->
    <title>Totebag Shop</title>

  </head>

  <body>

  <?php 
  
      // MELAKUKAN PENGECEKAN APAKAH ADA SESSION LOGOUT
      if (isset($_SESSION['logoutIsSuccess'])) {
          // JIKA ADA BERARTI USER LOGOUT
          // DAN TAMPILKAN PESAN BERIKUT JIKA USER BERHASIL LOGIN
          echo "
                        <script>
                            Swal.fire({
                              title: 'Logout is success',
                              text: 'Thanks for shopping!',
                              icon: 'success',
                              confirmButtonColor: '#1f1f1f'
                            })
                        </script>
                    ";

          // HAPUS SESSION LOGOUT
          $_SESSION['logoutIsSuccess'] = false;
          $_SESSION = [];

          // HANCURKAN SESSION
          session_destroy();
      }
    
   ?>

    <!-- =========== IMPORT COMPONENT NAVBAR =========== -->
    <?php include 'components/navbar.php'; ?>

    <!-- ==================== MAIN ===================== -->
    <main class="main position-relative">

      <!-- ==================== JUMBOTRON ==================== -->
      <section class="jumbotron d-flex flex-row justify-content-between align-items-center container">
        <img
          src="src/assets/jumbotron_image.png"
          alt="Jumbotron's Image"
          class="jumbotron-img img-fluid"
          data-aos="zoom-in"
          data-aos-duration="1000"
        />
        <article class="jumbotron-description ms-5 d-flex flex-column">
          <h1 class="jumbotron-title">
            Let's find your comfortable and aeshtetic tote bag to use
          </h1>
          <p class="mt-4 lh-lg">
            The totebag shop is here for those of you who are confused about
            what to bring with you, here there are lots of totebags that can be
            used comfortably and easily as well as aesthetically pleasing to
            wear
          </p>
          <span class="d-flex flex-row align-items-center mt-4">
            <a class="nav-link btn-custom btn-custom-dark" href="#">
              Explore Now
            </a>
            <a class="nav-link ms-5 learn-more" href="#">Learn More →</a>
          </span>
        </article>
      </section>

      <!-- ===================== PRODUCTS ==================== -->
      <section class="product section container" id="products">
        <h1 class="title" data-aos="zoom-in-up" data-aos-duration="500">Check Out Our Products</h1>

        <p class="product__description" data-aos="zoom-in-up" data-aos-duration="600">
          Here are some selected bags from our showroom, all are in excellent
          shape and has a long life span. Buy and enjoy best quality.
        </p>

        <div class="product__container container grid">
          <article class="product__card" data-aos="zoom-in-up">
            <div class="product__circle"></div>

            <img src="src/assets/img/product1.png" alt="" class="product__img" />

            <h3 class="product__title">Exsport Scholar Laptop Backpack</h3>
            <span class="product__price">IDR 134,000</span>

          </article>

          <article class="product__card" data-aos="zoom-in-up">
            <div class="product__circle"></div>

            <img src="src/assets/img/product2.png" alt="" class="product__img" />

            <h3 class="product__title">Exsport City Strolling Sling Bag</h3>
            <span class="product__price">IDR 149,000</span>

          </article>

          <article class="product__card" data-aos="zoom-in-up">
            <div class="product__circle"></div>

            <img src="src/assets/img/product3.png" alt="" class="product__img" />

            <h3 class="product__title">Exsport Reround Mini Sling Bag </h3>
            <span class="product__price">IDR 94,000</span>

          </article>

          <article class="product__card" data-aos="zoom-in-up">
            <div class="product__circle"></div>

            <img src="src/assets/img/product4.png" alt="" class="product__img" />

            <h3 class="product__title">Exsport Basic Square Tote Bag L</h3>
            <span class="product__price">IDR 189,000</span>

          </article>

          <article class="product__card" data-aos="zoom-in-up">
            <div class="product__circle"></div>

            <img src="src/assets/img/product5.png" alt="" class="product__img" />

            <h3 class="product__title">Exsport Fast Track Two Way Carry</h3>
            <span class="product__price">IDR 124,000</span>

          </article>

          <article class="product__card" data-aos="zoom-in-up">
            <div class="product__circle"></div>

            <img src="src/assets/img/product6.png" alt="" class="product__img" />

            <h3 class="product__title">Exsport Basic Cubical Sling Pouch</h3>
            <span class="product__price">IDR 172,000</span>

          </article>
        </div>
      </section>

      <!-- ===================== PRODUCTS ==================== -->
      <section class="products__section container">
        <h1 class="title">Most Popular Totebag 💗</h1>
        <article class="d-flex flex-wrap mt-5 justify-content-evenly">
          <div class="card-product" data-aos="zoom-in-up" data-aos-duration="500">
            <img
              src="src/assets/products/product_1.png"
              alt="Product's 1 Image of Most Popular Totebag"
              class="img-card"
            />
            <span class="d-flex flex-column mt-4">
              <span class="d-flex flex-row align-items-center">
                <img src="src/assets/icons/star.svg" alt="star-icon" />
                <span class="rating-card ms-2">4.9</span>
                <span class="desc-card ms-3">(22 Review) • 1000 stocks</span>
              </span>
              <h2 class="title-card mt-2">
                Exsport Basic Square Tote Bag L - Black
              </h2>
              <p class="sub-title-card">IDR 189,000.00</p>
            </span>
            <span
              class="d-flex flex-row align-items-center justify-content-between w-full"
            >
              <a class="nav-link btn-custom flex-grow-1" href="#">
                Check Detail
              </a>
              <a
                class="nav-link btn-custom btn-custom-dark flex-fill ms-4"
                href="#"
              >
                Buy
              </a>
            </span>
          </div>

          <div class="card-product" data-aos="zoom-in-up" data-aos-duration="1000">
            <img
              src="src/assets/products/product_2.png"
              alt="Product's 2 Image of Most Popular Totebag"
              class="img-card"
            />
            <span class="d-flex flex-column mt-4">
              <span class="d-flex flex-row align-items-center">
                <img src="src/assets/icons/star.svg" alt="star-icon" />
                <span class="rating-card ms-2">4.9</span>
                <span class="desc-card ms-3">(22 Review) • 1000 stocks</span>
              </span>
              <h2 class="title-card mt-2">
                Exsport Mingle Mini Sling Bag - Salem
              </h2>
              <p class="sub-title-card">IDR 209,000.00</p>
            </span>
            <span
              class="d-flex flex-row align-items-center justify-content-between w-full"
            >
              <a class="nav-link btn-custom flex-grow-1" href="#">
                Check Detail
              </a>
              <a
                class="nav-link btn-custom btn-custom-dark flex-fill ms-4"
                href="#"
              >
                Buy
              </a>
            </span>
          </div>

          <div class="card-product" data-aos="zoom-in-up" data-aos-duration="1500">
            <img
              src="src/assets/products/product_3.png"
              alt="Product's 3 Image of Most Popular Totebag"
              class="img-card"
            />
            <span class="d-flex flex-column mt-4">
              <span class="d-flex flex-row align-items-center">
                <img src="src/assets/icons/star.svg" alt="star-icon" />
                <span class="rating-card ms-2">4.9</span>
                <span class="desc-card ms-3">(22 Review) • 1000 stocks</span>
              </span>
              <h2 class="title-card mt-2">
                Exsport Basic Cubical Sling Pouch - Light Brown
              </h2>
              <p class="sub-title-card">IDR 139,000.00</p>
            </span>
            <span
              class="d-flex flex-row align-items-center justify-content-between w-full"
            >
              <a class="nav-link btn-custom flex-grow-1" href="#">
                Check Detail
              </a>
              <a
                class="nav-link btn-custom btn-custom-dark flex-fill ms-4"
                href="#"
              >
                Buy
              </a>
            </span>
          </div>
        </article>
      </section>

      <!-- ================= BACKGROUND BLACK ================ -->
      <div class="black-bg"></div>

      <!-- ======================= FOOTER ==================== -->
      <footer class="footer">
        Copyright 2023. All Rights Reserved Totebag by Arni.
      </footer>

    </main>

    <!-- =========== IMPORT COMPONENT SCRIPTS ========== -->
    <?php include 'components/scripts.php'; ?>

    <?php

      // CEK APAKAH SESSION LOGIN TIDAK ADA, JIKA TIDAK ADA
      // MAKA IMPORT MODAL AGAR USER DAPAT MELAKUKAN LOGIN / REGISTER
      if (!isset($_SESSION['login'])) {
          include 'components/modal_login.php';
          include 'components/modal_register.php';
      } 
    
    ?>

    <?php 
      // MELAKUKAN PENGECEKAN APAKAH ADA ERROR YANG DIBUAT APABILA LOGIN ERROR
      if (isset($_SESSION['loginError'])) {
        // JIKA ADA BERARTI ADA KESALAHAN INPUT USERNAME / PASSWORD
        // DAN TAMPILKAN PESAN BERIKUT JIKA USER GAGAL
        echo "
                        <script>
                            Swal.fire({
                              title: 'Login is failed',
                              text: 'Username or Password is wrong!',
                              icon: 'error',
                              confirmButtonColor: '#1f1f1f'
                            })
                        </script>
                    ";

        // HAPUS SESSION LOGOUT
        $_SESSION['loginError'] = false;
        $_SESSION = [];

        // HANCURKAN SESSION
        session_destroy();
    } ?>

    <?php 
      // MELAKUKAN PENGECEKAN APAKAH ADA ERROR YANG DIBUAT APABILA REGISTER ERROR
      if (isset($_SESSION['registerError'])) {
        // JIKA ADA BERARTI ADA KESALAHAN PADA SAAT PROSES REGISTRASI
        // DAN TAMPILKAN PESAN BERIKUT JIKA USER GAGAL
        echo "
                      <script>
                          Swal.fire({
                            title: 'Register is failed',
                            text: 'Username or Email has been taken!',
                            icon: 'error',
                            confirmButtonColor: '#1f1f1f'
                          })
                      </script>
                  ";

        // HAPUS SESSION LOGOUT
        $_SESSION['registerError'] = false;
        $_SESSION = [];

        // HANCURKAN SESSION
        session_destroy();
    } ?>

  </body>

</html>
