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
            <h3 class="mt-3 mb-2">Data Pembayaran</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pembayaran</li>
            </ol>

            <a class="btn btn-primary mb-2" href="input_pembayaran.php">Tambah Pembayaran</a>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Data Pembayaran
                </div>
                <div class="card-body">
                    <div class="table-responsive small">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($db->tampil_pembayaran() as $x) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $x['id_pembayaran'] ?></td>
                                        <td><?php echo $x['nama_siswa'] ?></td>
                                        <td><?php echo $x['kelas'] ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($x['tgl_pembayaran'])) ?></td>
                                        <td>Rp.<?php echo $x['jumlah'] ?></td>
                                        <td><?php echo $x['status_pembayaran'] ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="edit_pembayaran.php?id_pembayaran=<?php echo $x['id_pembayaran']; ?>&aksi=edit_pembayaran">Edit</a>
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
