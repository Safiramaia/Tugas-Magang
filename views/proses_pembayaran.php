<?php

include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];

// proses menambahkan
if ($aksi == "tambah_pembayaran") {
    // Tambahkan kode untuk mengonversi format jumlah
    $jumlah = str_replace(',', '', $_POST['jumlah']);
    $status_pembayaran = isset($_POST['status_pembayaran']) ? $_POST['status_pembayaran'] : null;

    // Panggil fungsi tambah_pembayaran dengan parameter yang sudah diubah
    $db->tambah_pembayaran($_POST['id_pembayaran'], $_POST['nama_siswa'], $_POST['kelas'], $_POST['tgl_pembayaran'], $jumlah, $status_pembayaran);

    header("location:tampil_pembayaran.php");

// proses mengupdate
} elseif ($aksi == "update_pembayaran") {
    // Tambahkan kode untuk mengonversi format jumlah
    $jumlah = str_replace(',', '', $_POST['jumlah']);
    $status_pembayaran = isset($_POST['status_pembayaran']) ? $_POST['status_pembayaran'] : null;

    // Panggil fungsi update_pembayaran dengan parameter yang sudah diubah
    $db->update_pembayaran($_POST['id_pembayaran'], $_POST['nama_siswa'], $_POST['kelas'], $_POST['tgl_pembayaran'], $jumlah, $status_pembayaran);

    header("location:tampil_pembayaran.php");

// proses menghapus
} elseif ($aksi == "hapus_pembayaran") {
    $db->hapus_pembayaran($_GET['id_pembayaran']);
    header("location:tampil_pembayaran.php");
}
?>
