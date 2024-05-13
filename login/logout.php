<?php
session_start();

// Hapus variabel sesi
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['level']);

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login setelah logout
echo "<script>alert('Anda telah keluar dari halaman website'); window.location='index.php';</script>";
?>
