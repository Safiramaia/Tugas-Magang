<?php
include 'header.php';
include 'sidebar.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container-fluid px-4 py-5">
        <h3 class="mt-4 mb-2">Data Jadwal Les</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Jadwal Les</li>
        </ol>

        <a class="btn btn-primary mb-2" href="input_jadwal.php">Tambah Jadwal</a>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Data Jadwal Les
            </div>
            <div class="card-body">
                <div class="table-responsive small">
                    <table class="table table-bordered" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Kode Jadwal</th>
                                <th scope="col">Nama Pengajar</th>
                                <th scope="col">Nama Mata Pelajaran</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Ruang</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Waktu Mulai</th>
                                <th scope="col">Waktu Selesai</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach($db->tampil_jadwal() as $x){
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $x['kode_jadwal'] ?></td>
                                        <td><?php echo $x['nama_pengajar'] ?></td>
                                        <td><?php echo $x['nama_mapel'] ?></td>
                                        <td><?php echo $x['hari'] ?></td>
                                        <td><?php echo $x['ruang'] ?></td>
                                        <td><?php echo $x['kelas'] ?></td>
                                        <td><?php echo $x['waktu_mulai'] ?></td>
                                        <td><?php echo $x['waktu_selesai'] ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="edit_jadwal.php?kode_jadwal=<?php echo $x['kode_jadwal']; ?>&aksi=edit_jadwal">Edit</a>
                                            <a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" href="proses_jadwal.php?kode_jadwal=<?php echo $x['kode_jadwal']; ?>&aksi=hapus_jadwal">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- script js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<!-- Path untuk file CSS dan JS -->
<script src="../js/scripts.js"></script>
<script src="../assets/demo/chart-area-demo.js"></script>
<script src="../assets/demo/chart-bar-demo.js"></script>
<script src="../assets/demo/chart-pie-demo.js"></script>
</body>

</html>

