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
                <h3 class="mt-4 mb-2">Form Kehadiran Siswa</h3>
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tambah Kehadiran Siswa</li> 
                </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                     <!--form menambahkan data-->
                    <form action="proses_kehadiran.php?aksi=tambah_kehadiran" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id">
                        <div id="id" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" name="nama_siswa">
                        <div id="nama_siswa" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_hadir" class="form-label">Tanggal Kehadiran:</label>
                        <input type="date" class="form-control" name="tgl_hadir">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="status_hadir" value="Hadir" id="status_hadir">
                        <label class="form-check-label" for="status_hadir">Hadir</label>
                    </div>
                </div>
                        <button type="submit" class="btn btn-primary" value="Tambah Kehadiran" onclick="showAlert();">Submit</button>
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

