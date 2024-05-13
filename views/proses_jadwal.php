<?php
include '../classes/database.php';
$db = new database();

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";

//proses menambahkan
if ($aksi == "tambah_jadwal") {
    $db->tambah_jadwal($_POST['kode_jadwal'], $_POST['nama_pengajar'], $_POST['nama_mapel'], $_POST['hari'], $_POST['ruang'],
    $_POST['kelas'], $_POST['waktu_mulai'], $_POST['waktu_selesai']);
    header("location:tampil_jadwal.php");

//proses mengupdate
} elseif ($aksi == "update_jadwal") {
    // Ambil data dari formulir edit_jadwal.php
    $kode_jadwal = $_POST['kode_jadwal'];
    $nama_pengajar = $_POST['nama_pengajar'];
    $nama_mapel = $_POST['nama_mapel'];
    $hari = $_POST['hari'];
    $ruang = $_POST['ruang'];
    $kelas = $_POST['kelas'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];

    // Update data jadwal
    $db->update_jadwal($kode_jadwal, $nama_pengajar, $nama_mapel, $hari, $ruang, $kelas, $waktu_mulai, $waktu_selesai);

    // Redirect ke halaman tampil_jadwal.php
    header("location:tampil_jadwal.php");

//proses menghapus
} elseif ($aksi == "hapus_jadwal") {
    $db->hapus_jadwal($_GET['kode_jadwal']);
    header("location:tampil_jadwal.php");
}
?>
