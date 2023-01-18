<div
  class="modal fade"
  id="loginModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="form modal-dialog">
    <div class="modal-content border-0 d-flex flex-column align-items-center">
      <img src="src/assets/logo.svg" class="logo-login" alt="logo" />
      <h1 class="login-title">Log In</h1>
      <form class="login-form" method="POST"
        action="/web-olshop/functions/login.php"
        data-aos="zoom-in"
        data-aos-duration="1000"
        autocomplete="off">
        <div class="mb-3">
          <input type="text" placeholder="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
          <input type="password" placeholder="password" name="password" class="form-control">
        </div>
        <button type="submit" name="login">login</button>
        <p class="message">
          Not registered?
          <a data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#registerModal">Create an account</a>
        </p>
      </form>
      <a class="close-btn" data-bs-dismiss="modal">𝗫</a>
    </div>
  </div>
</div>
