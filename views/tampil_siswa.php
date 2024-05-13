<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
    <title>Les Privat</title>
</head>

<body>
    <?php
        include 'header.php';
        include 'sidebar.php';
    ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container-fluid px-4 py-5">
            <h3 class="mt-4 mb-2">Data Siswa</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Siswa</li>
            </ol>

            <a class="btn btn-primary mb-2" href="input_siswa.php">Tambah Siswa</a>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Data Siswa 
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Jenjang Pendidikan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($db->tampil_siswa() as $x){
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $x['id'] ?></td>
                                        <td><?php echo $x['nama_siswa'] ?></td>
                                        <td><?php echo $x['jenis_kelamin'] ?></td>
                                        <td><?php echo $x['alamat'] ?></td>
                                        <td><?php echo $x['no_hp'] ?></td>
                                        <td><?php echo $x['email'] ?></td>
                                        <td><?php echo $x['jenjang'] ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="edit_siswa.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                                            <a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" href="proses_siswa.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
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
