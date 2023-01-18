<nav class="navbar navbar-expand-lg fixed-top bg-light py-4">
      <div class="container">
        <!-- Logo Section -->
        <a class="navbar-brand" href="#">
          <img src="src/assets/logo.svg" alt="Olshop's Logo" />
          <span class="ms-2">Totebag Shop</span>
        </a>

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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
              <a class="nav-link active" aria-current="page" href="/web-olshop">Home</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Explore</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="/web-olshop/about.php">About</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Rent</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="#">Sales</a>
            </li>
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
                    class='nav-link btn-custom log-in'
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