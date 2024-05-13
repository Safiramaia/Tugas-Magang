<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
//proses menambahkan
if ($aksi == "tambah_kehadiran") {
    $db->tambah_kehadiran($_POST['id'], $_POST['nama_siswa'], $_POST['tgl_hadir'], $_POST['status_hadir']);
    header("location:tampil_kehadiran.php");

//proses mengupdate
}elseif ($aksi=="update_kehadiran"){
    $db->update_kehadiran($_POST['id'], $_POST['nama_siswa'], $_POST['tgl_hadir'], $_POST['status_hadir']);
    header("location:tampil_kehadiran.php");

//proses menghapus
} elseif ($aksi == "hapus_kehadiran") {
    $db->hapus_kehadiran($_GET['id']);
    header("location:tampil_kehadiran.php");
}

?>