<?php

include '../classes/database.php';
$db= new database();

$aksi= $_GET['aksi'];
//proses menambahkan
if ($aksi == "tambah_mapel"){
    $db->tambah_mapel($_POST['kode_mapel'], $_POST['nama_mapel'], $_POST['jenjang'], $_POST['kelas']);
    header("location:tampil_mapel.php");

//proses mengupdate
}elseif ($aksi=="update_mapel"){
    $db->update_mapel($_POST['kode_mapel'], $_POST['nama_mapel'], $_POST['jenjang'], $_POST['kelas']);
    header("location:tampil_mapel.php");

//proses menghapus
}elseif ($aksi=="hapus_mapel") {
    $db->hapus_mapel($_GET['kode_mapel']);
    header("location:tampil_mapel.php");
}
?>

