<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'components/head.php'; ?>
    <title>Totebag Shop</title>
  </head>
  <body>
    <!-- ====================== NAVBAR ====================== -->
    <?php include 'components/navbar.php'; ?>

    <!-- ====================== MAIN ====================== -->
    <main class="main position-relative">
      <!-- ====================== JUMBOTRON ====================== -->
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

      <!-- ====================== PRODUCTS ====================== -->
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

      <div class="black-bg"></div>
    </main>

    <?php 
      if (!isset($_SESSION['login'])) {
        include 'components/modal_login.php';
        include 'components/modal_register.php';
      }
    ?>

    <!-- ====================== JS ====================== -->
    <?php include 'components/scripts.php'; ?>
  </body>
</html>
