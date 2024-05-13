<?php

include '../classes/database.php';
$db= new database();

$aksi= $_GET['aksi'];
//proses menambahkan
if ($aksi == "tambah_pengajar"){
    $db->tambah_pengajar($_POST['id'], $_POST['nama_pengajar'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_hp'], 
    $_POST['email'], $_POST['mapel_binaan']);
    header("location:tampil_pengajar.php");

//proses mengupdate
}elseif ($aksi=="update_pengajar"){
    $db->update_pengajar($_POST['id'], $_POST['nama_pengajar'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_hp'], 
    $_POST['email'], $_POST['mapel_binaan']);
    header("location:tampil_pengajar.php");

//proses menghapus
}elseif ($aksi=="hapus_pengajar") {
    $db->hapus_pengajar($_GET['id']);
    header("location:tampil_pengajar.php");
}
?>