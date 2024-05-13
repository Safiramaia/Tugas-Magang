<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
//proses menambahkan
if ($aksi == "tambah_kehadiran_pengajar1") {
    $db->tambah_kehadiran_pengajar($_POST['id_pengajar'], $_POST['nama_pengajar'], $_POST['tgl_hadir'], $_POST['pokok_bahasan'],
    $_POST['status_hadir']);
    header("location:tampil_kehadiran_pengajar1.php");

}

?>