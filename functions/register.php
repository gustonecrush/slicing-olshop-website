<?php

session_start();

require '../functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['loginIsSuccess'] = true;

        header('Location: /web-olshop/dashboard.php');
    } else {
        echo mysqli_error($conn);

        header('Location: /web-olshop/index.php');
    }
}

?>
