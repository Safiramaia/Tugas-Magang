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
            <h3 class="mt-4 mb-2">Edit Data Pengajar</h3>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tampil_pengajar.php">Data Pengajar</a></li>
                <li class="breadcrumb-item active">Edit Data Pengajar</li>
            </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <form action="proses_pengajar.php?aksi=update_pengajar" method="post">
                        <?php
                        // menarik data ke dalam perulangan
                        foreach ($db->edit_pengajar($_GET['id']) as $d) {
                        ?>
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                <input type="text" class="form-control" name="id" value="<?php echo $d['id'] ?>">
                                <div id="id" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                                <input type="text" class="form-control" name="nama_pengajar" value="<?php echo $d['nama_pengajar'] ?>">
                                <div id="nama_pengajar" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki" <?php echo ($d['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php echo ($d['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                <div id="jenis_kelamin" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat"><?php echo $d['alamat'] ?></textarea>
                                <div id="alamat" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="tel" class="form-control" name="no_hp" id="no_hp" value="<?php echo $d['no_hp'] ?>">
                                <div id="no_hp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $d['email'] ?>">
                                <div id="email" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="mapel_binaan" class="form-label">Mata Pelajaran Binaan</label>
                                <input type="text" class="form-control" name="mapel_binaan" value="<?php echo $d['mapel_binaan'] ?>">
                                <div id="mapel_binaan" class="form-text"></div>
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
