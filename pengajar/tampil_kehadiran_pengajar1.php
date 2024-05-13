<!DOCTYPE html>
<html>
	<body>
	<?php
		include'header_pengajar.php';
		include'sidebar_pengajar.php';
	?>
	</body>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container-fluid px-4 py-5">
            <h3 class="mt-4 mb-2">Data Kehadiran Pengajar</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard_pengajar.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Kehadiran Pengajar</li>
            </ol>

            <a class="btn btn-primary mb-2" href="form_kehadiran_pengajar1.php">Tambah Kehadiran</a>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Data Kehadiran Pengajar
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Pengajar</th>
                                    <th scope="col">Tanggal Kehadiran</th>
                                    <th scope="col">Pokok Bahasan</th>
                                    <th scope="col">Status Kehadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($db->tampil_kehadiran_pengajar() as $x){
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $x['id_pengajar'] ?></td>
                                        <td><?php echo $x['nama_pengajar'] ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($x['tgl_hadir'])) ?></td>
                                        <td><?php echo $x['pokok_bahasan'] ?></td>
                                        <td><?php echo $x['status_hadir'] ?></td>
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
