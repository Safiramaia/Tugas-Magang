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
            <h3 class="mt-4 mb-2">Edit Data Jadwal Les</h3>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tampil_jadwal.php">Data Jadwal Les</a></li>
                <li class="breadcrumb-item active">Edit Data Jadwal Les</li> 
            </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <form action="proses_jadwal.php?aksi=update_jadwal" method="post">
                        <?php
                        // menarik data ke dalam perulangan
                        foreach($db->edit_jadwal($_GET['kode_jadwal']) as $d) {
                        ?>
                            <div class="mb-3">
                                <label for="kode_jadwal" class="form-label">Kode Jadwall</label>
                                <input type="hidden" name="kode_jadwal" value="<?php echo $d['kode_jadwal']; ?>">
                                <input type="text" class="form-control" name="id" value="<?php echo $d['kode_jadwal'] ?>">
                                <div id="kode_jadwal" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                                <input type="text" class="form-control" name="nama_pengajar" value="<?php echo $d['nama_pengajar'] ?>">
                                <div id="nama_pengajar" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" name="nama_mapel" value="<?php echo $d['nama_mapel'] ?>">
                                <div id="nama_mapel" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="hari" class="form-label">Hari</label>
                                <input type="text" class="form-control" name="hari" value="<?php echo $d['hari'] ?>">
                                <div id="hari" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="ruang" class="form-label">Ruang</label>
                                <input type="text" class="form-control" name="ruang" value="<?php echo $d['ruang'] ?>">
                                <div id="ruang" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="<?php echo $d['kelas'] ?>">
                                <div id="kelas" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                                <input type="time" class="form-control" name="waktu_mulai" value="<?php echo date('H:i', strtotime($d['waktu_mulai'])); ?>" required>
                                <div id="waktu_mulai" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                                <input type="time" class="form-control" name="waktu_selesai" value="<?php echo date('H:i', strtotime($d['waktu_selesai'])); ?>" required>
                                <div id="waktu_selesai" class="form-text"></div>
                            </div>
                            <button type="submit" class="btn btn-primary" value="Simpan" onclick="showAlert();">Submit</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
                <!-- Alert jika berhasil edit data -->
                <script>
                    function showAlert() {
                        alert("Data berhasil diedit!");
                    }
                </script>
            </main>
        </div>
    </div>
</div>

