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
            <h3 class="mt-4 mb-2">Edit Kehadiran Pengajar</h3>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tampil_kehadiran_pengajar.php">Data Kehadiran Pengajar</a></li>
                <li class="breadcrumb-item active">Edit Kehadiran Pengajar</li>
            </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <?php
                    // Mendapatkan data untuk diedit
                    foreach ($db->edit_kehadiran_pengajar($_GET['id_pengajar']) as $d) {
                    ?>
                        <!-- Form untuk mengedit data -->
                        <form action="proses_kehadiran_pengajar.php?aksi=update_kehadiran_pengajar" method="post">
                        <div class="mb-3">
                            <label for="id_pengajar" class="form-label">ID</label>
                            <input type="hidden" name="id_pengajar" value="<?php echo $d['id_pengajar'] ?>">
                            <input type="text" class="form-control" name="id" value="<?php echo $d['id_pengajar'] ?>">
                            <div id="id_pengajar" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                            <input type="text" class="form-control" name="nama_pengajar" value="<?php echo $d['nama_pengajar'] ?>">
                            <div id="nama_pengajar" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_hadir" class="form-label">Tanggal Kehadiran</label>
                            <input type="date" class="form-control" name="tgl_hadir" value="<?php echo $d['tgl_hadir']; ?>">
                            <div id="tgl_hadir" class="form-date"></div>
                        </div>
                        <div class="mb-3">
                            <label for="pokok_bahasan" class="form-label">Pokok Bahasan</label>
                            <input type="text" class="form-control" name="pokok_bahasan" value="<?php echo $d['pokok_bahasan'] ?>">
                            <div id="pokok_bahasan" class="form-text"></div>
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
