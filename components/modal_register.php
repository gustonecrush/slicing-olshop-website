<div
  class="modal fade"
  id="registerModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="form form-regis modal-dialog">
    <div class="modal-content border-0 d-flex flex-column align-items-center">
      <img src="src/assets/logo.svg" class="logo-login" alt="logo" />
      <h1 class="login-title">Create New Account</h1>
      <form class="login-form" method="POST"
        action="/web-olshop/functions/register.php"
        data-aos="zoom-in"
        data-aos-duration="1000"
        autocomplete="off">
        <div class="mb-3">
          <input type="text" placeholder="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
          <input type="email" placeholder="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
          <input type="password" placeholder="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
          <input type="password" placeholder="confirm password" name="confirmPassword" class="form-control">
        </div>
        <button type="submit" name="register">Register</button>
        <p class="message">
          Have an account?
          <a data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#loginModal">Log In</a>
        </p>
      </form>
      <a class="close-btn" data-bs-dismiss="modal">𝗫</a>
    </div>
  </div>
</div>
