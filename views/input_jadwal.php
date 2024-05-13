<?php
    include 'header.php';
    include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Les Privat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid px-2 py-5">
        <div class="row">
            <div class="col-md-3">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-9 ml-sm-auto">
                <h3 class="mt-4 mb-2">Tambah Data Jadwal Les</h3>
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="tampil_jadwal.php">Data Jadwal Les</a></li>
                    <li class="breadcrumb-item active">Tambah Data Jadwal Les</li> 
                </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <!-- Form menambahkan data -->
                    <form action="proses_jadwal.php?aksi=tambah_jadwal" method="post">
                        <div class="mb-2">
                            <label for="kode_jadwal" class="form-label">Kode Jadwal</label>
                            <input type="text" class="form-control" name="kode_jadwal">
                            <div id="kode_jadwal" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                            <input type="text" class="form-control" name="nama_pengajar">
                            <div id="nama_pengajar" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" name="nama_mapel">
                            <div id="nama_mapel" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="hari" class="form-label">Hari</label>
                            <select class="form-select" name="hari">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                            </select>
                            <div id="hari" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="ruang" class="form-label">Ruang</label>
                            <input type="text" class="form-control" name="ruang">
                            <div id="ruang" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" name="kelas" id="kelas">
                                <option value="Kelas 4">Kelas 4</option>
                                <option value="Kelas 5">Kelas 5</option>
                                <option value="Kelas 6">Kelas 6</option>
                                <option value="Kelas 7">Kelas 7</option>
                                <option value="Kelas 8">Kelas 8</option>
                                <option value="Kelas 9">Kelas 9</option>
                                <option value="Kelas 10">Kelas 10</option>
                                <option value="Kelas 11">Kelas 11</option>
                                <option value="Kelas 12">Kelas 12</option>
                            </select>
                            <div id="kelas" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                            <input type="time" class="form-control" name="waktu_mulai">
                            <div id="waktu_mulai" class="form-text"></div>
                        </div>
                        <div class="mb-2">
                            <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                            <input type="time" class="form-control" name="waktu_selesai">
                            <div id="waktu_selesai" class="form-text"></div>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Simpan" onclick="showAlert();">Submit</button>
                    </form>
                </div>
                <!-- Alert jika berhasil menambahkan -->
                <script>
                    function showAlert() {
                        alert("Data berhasil disimpan!");
                    }
                </script>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
