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
            <h3 class="mt-4 mb-2">Edit Data Pembayaran</h3>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tampil_pembayaran.php">Data Pembayaran</a></li>
                <li class="breadcrumb-item active">Edit Data Pembayaran</li> 
            </ol>
            <main class="ml-sm-auto ml-md-auto ml-lg-0">
                <div class="container px-2 py-2">
                    <form action="proses_pembayaran.php?aksi=update_pembayaran" method="post">
                        <?php
                        // menarik data ke dalam perulangan
                        foreach($db->edit_pembayaran($_GET['id_pembayaran']) as $x) {
                        ?>
                            <div class="mb-3">
                                <label for="id_pembayaran" class="form-label">ID Pembayaran</label>
                                <input type="hidden" name="id_pembayaran" value="<?php echo $x['id_pembayaran']; ?>">
                                <input type="text" class="form-control" name="id" value="<?php echo $x['id_pembayaran'] ?>">
                                <div id="id_pembayaran" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" value="<?php echo $x['nama_siswa'] ?>">
                                <div id="nama_siswa" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas" value="<?php echo $x['kelas'] ?>">
                                <div id="kelas" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_pembayaran" class="form-label">Tanggal Pembayaran</label>
                                <input type="date" class="form-control" name="tgl_pembayaran" value="<?php echo $d['tgl_pembayaran']; ?>">
                                <div id="tgl_pembayaran" class="form-date"></div>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" value="<?php echo $x['jumlah'] ?>">
                                <div id="jumlah" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <input type="text" class="form-control" name="status_pembayaran" value="<?php echo $x['status_pembayaran'] ?>">
                                <div id="status_pembayaran" class="form-text"></div>
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
