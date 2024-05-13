<?php

include '../classes/database.php';
$db= new database();

$aksi= $_GET['aksi'];
//proses menambahkan
if ($aksi == "tambah"){
    $db->tambah_siswa($_POST['id'], $_POST['nama_siswa'], $_POST['jenis_kelamin'], $_POST['alamat'], 
    $_POST['no_hp'], $_POST['email'], $_POST['jenjang'],);
    header("location:tampil_siswa.php");

//proses mengupdate
}elseif ($aksi=="update"){
    $db->update($_POST['id'], $_POST['nama_siswa'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_hp'], $_POST['email'], $_POST['jenjang'],);
    header("location:tampil_siswa.php");

//proses menghapus
}elseif ($aksi=="hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_siswa.php");
}
?>