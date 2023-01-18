<?php

session_start();

session_unset();
$_SESSION["logoutIsSuccess"] = true;

header("Location: /web-olshop/index.php")

?>
