<?php
// Memanggil koneksi database
include 'koneksi.php';

// Memastikan variabel POST telah di-set sebelum digunakan
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['level'])) {

    // Menggunakan prepared statement untuk mencegah SQL injection
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $level = mysqli_real_escape_string($koneksi, $_POST['level']);
    $pass = ($_POST['password']);
    $password = mysqli_real_escape_string($koneksi, $pass);

    // Cek username, untuk mengetahui terdaftar atau tidak
    $cek_user = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND level = '$level' ");
    $user_valid = mysqli_fetch_array($cek_user);

    // Menguji jika username terdaftar
    if ($user_valid) {
        // Mengecek password sesuai atau tidak
        if (password_verify($password, $user_valid['password'])) {
            // Memulai sesi
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['level'] = $user_valid['level'];

            // Uji level user
            if ($level == 'admin') {
                header('location:../views/dashboard_admin.php');
            } elseif ($level == 'siswa') {
                header('location:../siswa/dashboard_siswa.php');
            } elseif ($level == 'pengajar') {
                header('location:../pengajar/dashboard_pengajar.php');
            }
        } else {
            echo "<script>alert('Maaf, Login Gagal, Password Anda tidak sesuai!');
            document.location='index.php'</script>";
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Username Anda tidak terdaftar!');
        document.location='index.php'</script>";
    }

} else {
    // Tangani kasus jika variabel POST tidak di-set
    echo "<script>alert('Maaf, Login Gagal, Mohon isi semua kolom dengan benar!');
    document.location='index.php'</script>";
}
?>
