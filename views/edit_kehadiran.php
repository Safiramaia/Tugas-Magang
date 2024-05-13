<?php
include 'header.php';
include 'sidebar.php';
?>

<div class="container-fluid px-2 py-5">
    <div class="row">
        <div class="col-md-3">
            <?php include 'sidebar.php'; ?>
        </div>
        <div class="col-md-9 ml-sm-auto">
            <h3 class="mt-4 mb-2">Edit Kehadiran Siswa</h3>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tampil_kehadiran.php">Data Kehadiran</a></li>
                <li class="breadcrumb-item active">Edit Kehadiran Siswa</li>
            </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <?php
                    // Mendapatkan data untuk diedit
                    foreach ($db->edit_kehadiran($_GET['id']) as $d) {
                    ?>
                        <!-- Form untuk mengedit data -->
                        <form action="proses_kehadiran.php?aksi=update_kehadiran" method="post">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                            <input type="text" class="form-control" name="id" value="<?php echo $d['id'] ?>">
                            <div id="id" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nama_siswa" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama_siswa" value="<?php echo $d['nama_siswa'] ?>">
                            <div id="nama_siswa" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_hadir" class="form-label">Tanggal Kehadiran</label>
                            <input type="date" class="form-control" name="tgl_hadir" value="<?php echo $d['tgl_hadir']; ?>">
                            <div id="tgl_hadir" class="form-date"></div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="status_hadir" value="Hadir" id="status_hadir" <?php echo ($d['status_hadir'] == 'Hadir') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="status_hadir">Hadir</label>
                        </div>
                        <button type="submit" class="btn btn-primary" value="simpan" onclick="showAlert();">Submit</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
                <!-- Alert jika berhasil mengedit data -->
                <script>
                    function showAlert() {
                        alert("Data berhasil diedit!");
                    }
                </script>
            </main>
        </div>
    </div>
</div>
