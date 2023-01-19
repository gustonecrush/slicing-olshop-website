<?php

// MEMULAI SESSION. AGAR DAPAT MENGGUNAKAN, MEMBUAT, ATAU MENGHAUNCURKAN SESSION
session_start();

// MENGHAPUS SESSION-SESSION YANG TELAH DIBUAT SEBELUMNYA SETELAH LOGIN
session_unset();

// MEMBUAT SESSION UNTUK LOGOUT
$_SESSION["logoutIsSuccess"] = true;

// MELEMPAR USER KE HALAMAN UTAMA JIKA USER BERHASIL LOGOUT
header("Location: /web-olshop/")

?>
