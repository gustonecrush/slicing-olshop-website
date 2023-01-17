<?php

require 'functions.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek apakah ada username di database
    $result = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username = '$username'"
    );

    if (mysqli_num_rows($result) === 1) {
        // kalo ada usernamenya, cek password
        // ambil data password di database
        $passwordInDb = mysqli_fetch_assoc($result);

        if (password_verify($password, $passwordInDb)) {
            header('Location: index.html');
            exit();
        }
    }

    $error = true;
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

    <title>Log In</title>
  </head>
  <body>
    <?php if (isset($error)): ?>
      <p>username / password salah</p>
    <?php endif; ?>
    <div class="login-page">
      <div class="form">
        <img src="src/assets/logo.svg" class="logo-login" alt="logo" />
        <h1 class="login-title">Log In</h1>
        <form class="register-form" method="POST" action="">
          <input type="text" placeholder="username" name="username" />
          <input type="password" placeholder="password" name="password" />
          <input type="text" placeholder="email address" />
          <button>create</button>
          <p class="message">
            Already registered?
            <a href="#">Sign In</a>
          </p>
        </form>
        <form class="login-form">
          <input type="text" placeholder="username" name="username" />
          <input type="password" placeholder="password" name="password" />
          <button type="submit" name="login">login</button>
          <p class="message">
            Not registered?
            <a href="/web-olshop/register.php">Create an account</a>
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
