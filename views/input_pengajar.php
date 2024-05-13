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
                <h3 class="mt-4 mb-2">Tambah Data Pengajar</h3>
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="tampil_pengajar.php">Data Pengajar</a></li>
                    <li class="breadcrumb-item active">Tambah Data Pengajar</li> 
                </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                     <!--form menambahkan data-->
                    <form action="proses_pengajar.php?aksi=tambah_pengajar" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id">
                        <div id="id" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pengajar</label>
                        <input type="text" class="form-control" name="nama_pengajar">
                        <div id="nama_pengajar" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                        <div id="jenis_kelamin" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="textarea" class="form-control" name="alamat">
                        <div id="alamat" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor HP</label>
                        <input type="tel" class="form-control" name="no_hp" id="no_hp">
                        <div id="no_hp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <div id="email" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mata Pelajaran Binaan</label>
                        <input type="text" class="form-control" name="mapel_binaan">
                        <div id="mapel_binaan" class="form-text"></div>
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
