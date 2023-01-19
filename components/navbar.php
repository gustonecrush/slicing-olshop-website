<!-- ======================== NAVBAR ======================== -->
<nav class="navbar navbar-expand-lg fixed-top bg-light py-4">

  <div class="container">
    <!-- =============== LOGO =============== -->
    <a class="navbar-brand" href="#">
      <img src="src/assets/logo.svg" alt="Olshop's Logo" />
      <span class="ms-2">Totebag Shop</span>
    </a>

    <!-- ========== BUTTON COLLAPSE ========= -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- ========== NAVBAR COLLAPSE ========= -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <!-- ========== LINK HOME ========= -->
        <li class="nav-item me-3">
          <a class="nav-link active" aria-current="page" href="/web-olshop">Home</a>
        </li>
        <!-- ======== LINK EXPLORE ======== -->
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Explore</a>
        </li>
        <!-- ========= LINK ABOUT ========= -->
        <li class="nav-item me-3">
          <a class="nav-link" href="/web-olshop/about.php">About</a>
        </li>
        <!-- ========== LINK RENT ========= -->
        <li class="nav-item me-3">
          <a class="nav-link" href="#">Rent</a>
        </li>
        <!-- ========= LINK SALES ========= -->
        <li class="nav-item me-4">
          <a class="nav-link" href="#">Sales</a>
        <!-- === LINK LOGIN & DASHBOARD === -->
        </li>
            <!-- 
              JIKA TIDAK ADA SESSION LOGIN, MAKA TAMPILKAN TOMBOL LOGIN
              JIKA ADA SESSION LOGIN, MAKA TAMPILKAN TOMBOL DASHBOARD
              -->
            <?php if (!isset($_SESSION['login'])) {
                echo "
                  <li class='nav-item me-3'>
                  <a
                    class='nav-link btn-custom log-in'
                    data-bs-toggle='modal' data-bs-target='#loginModal'
                  >
                    Log In
                  </a>
                </li>
              ";
            } else {
                echo "
                  <li class='nav-item me-3'>
                  <a
                    class='nav-link btn-custom'
                    href='/web-olshop/dashboard.php'
                  >
                    Dashboard
                  </a>
                </li>
              ";
            } ?>

      </ul>

    </div>

  </div>

</nav>