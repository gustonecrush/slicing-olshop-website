<?php

require 'functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
      </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ====================== META TAGS ====================== -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ====================== BOOTSTRAP CSS ====================== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- ====================== ICON ====================== -->
    <link href="src/assets//logo.svg" rel="icon" />

    <!-- ====================== CSS ====================== -->
    <link href="src/styles/styles.css" rel="stylesheet" />
    <link href="src/styles/login.css" rel="stylesheet" />

    <title>Register</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <img src="src/assets/logo.svg" class="logo-login" alt="logo" />
        <h1 class="login-title">Create New Account</h1>
        <form class="register-form" method="POST" action="">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">
              Email address
            </label>
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            <div id="emailHelp" class="form-text">
              We'll never share your email with anyone else.
            </div>
          </div>
          <input type="text" placeholder="username" name="username" />
          <input type="email" placeholder="email" name="email" />
          <input type="password" placeholder="password" name="password" />
           <input type="password" placeholder="confirm password" name="confirmPassword" />
          <button>create</button>
          <p class="message">
            Already registered?
            <a href="#">Create New Account</a>
          </p>
        </form>
        <form class="login-form">
          <input type="text" placeholder="username" />
          <input type="password" placeholder="password" />
          <button name="register" type="submit">Register</button>
          <p class="message">
            Have an account?
            <a href="/web-olshop/login.php">Sign In</a>
          </p>
        </form>
      </div>
    </div>

    <!-- ====================== JS ====================== -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
