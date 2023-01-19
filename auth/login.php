<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start();

// IMPORT FILE FUNCTIONS, UNTUK CONNECT KE DATABASE, KARENA
// KONFIGURASI DATABASE TERDAPAT DI FILE TERSEBUT
require '../functions.php';

// JIKA TOMBOL LOGIN DITEKAN, EKSEKUSI PROGRAM BERIKUT
if (isset($_POST['login'])) {

    // MENGAMBIL DATA USERNAME & PASSWORD DARI INPUT USER
    $username = $_POST['username'];
    $password = $_POST['password'];

    // MELAKUKAN QUERY KE DATABASE UNTUK MENCARI USERNAME, SESUAI DENGAN INPUT USER
    $result = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username = '$username'"
    );

    // MELAKUKAN PENGKONDISIAN APAKAH QUERY YANG DILAKUKAN, MENGHASILKAN
    // BARIS = 1 YANG ARTINYA TERDAPAT USERNAME YANG DIMASUKKAN OLEH USER DI DATABASE
    if (mysqli_num_rows($result) === 1) {

        // JIKA ADA USERNAMENYA, QUERY DATA PASSWORD
        // DARI QUERY $RESULT DIATAS
        $passwordInDb = mysqli_fetch_assoc($result);

        // MELAKUKAN PENGECEKAN APAKAH PASSWORD INPUT USER
        // SAMA DENGAN PASSWORD DARI QUERY $RESULT YANG SEBELUMNYA
        // DILAKUKAN PENGECEKAN USERNAME
        if (password_verify($password, $passwordInDb['password'])) {
            
            // JIKA ADA, BUAT VARIABEL SESSION SEBAGAI BERIKUT
            // GUNANYA UNTUK MELAKUKAN PENGECEKAN DISETIAP HALAMAN
            // SUDAH LOGIN / BELUM
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION["loginIsSuccess"] = true;

            // APABILA USERNAME & PASSWORD BENAR, LEMPAR USER KE HALAMAN DASHBOARD (HALAMAN BERHASIL)
            header('Location: /web-olshop/dashboard.php');

            exit();
        } else {

            // LEMPAR USER KE HALAMAN UTAMA
            $_SESSION["loginError"] = true;
            header('Location: /web-olshop/');

        }

    }

    // LEMPAR USER KE HALAMAN UTAMA
    $_SESSION["loginError"] = true;
    header('Location: /web-olshop/');

}

?>
