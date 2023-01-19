<!-- ======================== MODAL LOGIN ======================== -->
<div
  class="modal fade"
  id="loginModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>

  <!-- ======================== META DIALOG ======================== -->
  <div class="form modal-dialog">

    <!-- ============== META CONTENT ============== -->
    <div class="modal-content border-0 d-flex flex-column align-items-center">

      <!-- ============== LOGO ============== -->
      <img src="src/assets/logo.svg" class="logo-login" alt="logo" />

      <!-- ============= HEADER ============= -->
      <h1 class="login-title">Log In</h1>

      <!-- =========== FORM LOGIN =========== -->
      <form class="login-form" method="POST"
        action="/web-olshop/auth/login.php"
        data-aos="zoom-in"
        data-aos-duration="1000"
        autocomplete="off">

        <!-- ============== INPUT USERNAME ============== -->
        <div class="mb-3">
          <input type="text" placeholder="username" name="username" class="form-control" required>
        </div>

        <!-- ============== INPUT PASSWORD ============== -->
        <div class="mb-3">
          <input type="password" placeholder="password" name="password" class="form-control" required>
        </div>

        <!-- =============== BUTTON LOGIN =============== -->
        <button type="submit" name="login">login</button>

        <!-- =============== LINK REGISTER ============== -->
        <p class="message">
          Not registered?
          <a data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#registerModal">Create an account</a>
        </p>

      </form>

      <!-- ============== BUTTON CLOSE ============== -->
      <a class="close-btn" data-bs-dismiss="modal">𝗫</a>

    </div>

  </div>
  
</div>
