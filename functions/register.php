<?php

require '../functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
      </script>";
        header('Location: /web-olshop/dashboard.php');
    } else {
        echo mysqli_error($conn);
    }
}

?>
