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
            <h3 class="mt-3 mb-2">Data Pengajar</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard_pengajar.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pengajar</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Data Pengajar 
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Pengajar</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mata Pelajaran Binaan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach($db->tampil_pengajar() as $x){
                                ?>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $x['id'] ?></td>
                                    <td><?php echo $x['nama_pengajar'] ?></td>
                                    <td><?php echo $x['jenis_kelamin'] ?></td>
                                    <td><?php echo $x['alamat'] ?></td>
                                    <td><?php echo $x['no_hp'] ?></td>
                                    <td><?php echo $x['email'] ?></td>
                                    <td><?php echo $x['mapel_binaan'] ?></td>
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

