<?php

session_start();

require '../functions.php';

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

        if (password_verify($password, $passwordInDb['password'])) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION["loginIsSuccess"] = true;

            header('Location: /web-olshop/dashboard.php');
            exit();
        }
    }

    $error = true;
}

?>
