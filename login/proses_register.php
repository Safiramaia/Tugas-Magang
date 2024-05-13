<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Gunakan prepared statement untuk mencegah SQL injection
    $query = "INSERT INTO login (username, email, password, level) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);

    // Bind parameters ke dalam statement
    $stmt->bind_param("ssss", $username, $email, $hashed_password, $level);

    // Eksekusi statement
    $result = $stmt->execute();

    if ($result) {
        // Pilih arah halaman berdasarkan level
        if ($level == 'pengajar') {
            // Jika level adalah pengajar, arahkan ke halaman login
            header("location:index.php");
        } elseif ($level == 'siswa') {
            // Jika level adalah siswa, arahkan ke halaman pembayaran
            echo '<script>alert("Data berhasil ditambahkan. Silakan isi data diri dan lakukan pembayaran.");</script>';
            header("location:../views/form_pembayaran.php");
        } elseif ($level == 'admin') {
            // Jika level adalah admin, atur pesan error
            $error = "Registrasi untuk admin tidak diperbolehkan.";
        } else {
            // Level tidak dikenali, atur pesan error
            $error = "Level tidak valid.";
        }
    } else {
        // Registrasi gagal. Set pesan error
        $error = "Registrasi gagal. Silakan coba lagi.";
    }

    // Tutup statement
    $stmt->close();
}
?>







