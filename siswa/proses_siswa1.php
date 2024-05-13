<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
//proses menambahkan
if ($aksi == "tambah_kehadiran") {
    $db->tambah_kehadiran($_POST['id_siswa'], $_POST['nama_siswa'], $_POST['tgl_hadir'], $_POST['status_hadir']);
    header("location:tampil_kehadiran1.php");
}

?>