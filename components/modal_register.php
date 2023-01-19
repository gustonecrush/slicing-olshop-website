<!-- ====================== MODAL REGISTER ====================== -->
<div
  class="modal fade"
  id="registerModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>

  <!-- ======================== META DIALOG ======================== -->
  <div class="form form-regis modal-dialog">

    <!-- ============== META CONTENT ============== -->
    <div class="modal-content border-0 d-flex flex-column align-items-center">

      <!-- ============== LOGO ============== -->
      <img src="src/assets/logo.svg" class="logo-login" alt="logo" />

      <!-- ============= HEADER ============= -->
      <h1 class="login-title">Create New Account</h1>

      <!-- =========== FORM LOGIN =========== -->
      <form class="login-form" method="POST"
        action="/web-olshop/auth/register.php"
        data-aos="zoom-in"
        data-aos-duration="1000"
        autocomplete="off">

        <!-- ============== INPUT USERNAME ============== -->
        <div class="mb-3">
          <input type="text" placeholder="username" name="username" class="form-control" required>
        </div>

        <!-- =============== INPUT EMAIL ================ -->
        <div class="mb-3">
          <input type="email" placeholder="email" name="email" class="form-control" required>
        </div>

        <!-- ============== INPUT PASSWORD ============== -->
        <div class="mb-3">
          <input type="password" placeholder="password" name="password" class="form-control" required>
        </div>

        <!-- =========== INPUT CONFIRM PASSWORD ========= -->
        <div class="mb-3">
          <input type="password" placeholder="confirm password" name="confirmPassword" class="form-control" required>
        </div>

        <!-- ============== BUTTON REGISTER ============= -->
        <button type="submit" name="register">Register</button>

        <!-- ================ LINK LOGIN ================ -->
        <p class="message">
          Have an account?
          <a data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#loginModal">Log In</a>
        </p>

      </form>

      <!-- ============== BUTTON CLOSE ============== -->
      <a class="close-btn" data-bs-dismiss="modal">𝗫</a>

    </div>

  </div>
  
</div>
