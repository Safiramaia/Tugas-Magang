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
            <h3 class="mt-4 mb-2">Edit Data Mata Pelajaran</h3>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tampil_mapel.php">Data Mata Pelajaran</a></li>
                <li class="breadcrumb-item active">Edit Data Mata Pelajaran</li> 
            </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <form action="proses_mapel.php?aksi=update_mapel" method="post">
                        <?php
                        // menarik data ke dalam perulangan
                        foreach($db->edit_mapel($_GET['kode_mapel']) as $d) {
                        ?>
                            <div class="mb-3">
                                <label for="kode_mapel" class="form-label">Kode Mapel</label>
                                <input type="hidden" name="kode_mapel" value="<?php echo $d['kode_mapel'] ?>">
                                <input type="text" class="form-control" name="id" value="<?php echo $d['kode_mapel'] ?>">
                                <div id="kode_mapel" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" name="nama_mapel" value="<?php echo $d['nama_mapel'] ?>">
                                <div id="nama_mapel" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="jenjang" class="form-label">Jenjang Pendidikan</label>
                                <select class="form-select" name="jenjang" id="jenjang">
                                    <option value="SD" <?php echo ($d['jenjang'] == 'SD') ? 'selected' : '' ?>>SD</option>
                                    <option value="SMP" <?php echo ($d['jenjang'] == 'SMP') ? 'selected' : '' ?>>SMP</option>
                                    <option value="SMA" <?php echo ($d['jenjang'] == 'SMA') ? 'selected' : '' ?>>SMA</option>
                                </select>
                                <div id="jenjang" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select class="form-select" name="kelas" id="kelas">
                                    <option value="Kelas 4" <?php echo ($d['kelas'] == 'Kelas 4') ? 'selected' : '' ?>>Kelas 4</option>
                                    <option value="Kelas 5" <?php echo ($d['kelas'] == 'Kelas 5') ? 'selected' : '' ?>>Kelas 5</option>
                                    <option value="Kelas 6" <?php echo ($d['kelas'] == 'Kelas 6') ? 'selected' : '' ?>>Kelas 6</option>
                                    <option value="Kelas 7" <?php echo ($d['kelas'] == 'Kelas 7') ? 'selected' : '' ?>>Kelas 7</option>
                                    <option value="Kelas 8" <?php echo ($d['kelas'] == 'Kelas 8') ? 'selected' : '' ?>>Kelas 8</option>
                                    <option value="Kelas 9" <?php echo ($d['kelas'] == 'Kelas 9') ? 'selected' : '' ?>>Kelas 9</option>
                                    <option value="Kelas 10" <?php echo ($d['kelas'] == 'Kelas 10') ? 'selected' : '' ?>>Kelas 10</option>
                                    <option value="Kelas 11" <?php echo ($d['kelas'] == 'Kelas 11') ? 'selected' : '' ?>>Kelas 11</option>
                                    <option value="Kelas 12" <?php echo ($d['kelas'] == 'Kelas 12') ? 'selected' : '' ?>>Kelas 12</option>
                                </select>
                                <div id="kelas" class="form-text"></div>
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

