<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form Pembayaran</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-3">Form Pembayaran</h4>
                                </div>
                                <?php if (isset($error)) {
                                    echo "<p class='error'>$error</p>";
                                } ?>
                                <div class="card-body mt-3">
                                    <form id="paymentForm" action="proses_pembayaran.php" method="post">
                                        <div class="mb-2">
                                            <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                            <input type="text" class="form-control" name="nama_siswa" required>
                                        </div>

                                        <div class="mb-2">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <select class="form-select" name="kelas" id="kelas">
                                                <option value="Kelas 4">Kelas 4</option>
                                                <option value="Kelas 5">Kelas 5</option>
                                                <option value="Kelas 6">Kelas 6</option>
                                                <option value="Kelas 7">Kelas 7</option>
                                                <option value="Kelas 8">Kelas 8</option>
                                                <option value="Kelas 9">Kelas 9</option>
                                                <option value="Kelas 10">Kelas 10</option>
                                                <option value="Kelas 11">Kelas 11</option>
                                                <option value="Kelas 12">Kelas 12</option>
                                            </select>
                                            <div id="kelas" class="form-text"></div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="tgl_pembayaran" class="form-label">Tanggal Pembayaran</label>
                                            <input type="date" class="form-control" name="tgl_pembayaran" required>
                                        </div>

                                        <div class="mb-2">
                                            <label for="jumlah" class="form-label">Jumlah</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="jumlah" class="form-control" id="jumlah" name="jumlah" step="any">
                                            </div>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label">Metode Pembayaran</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="metode_pembayaran[]" value="tunai">
                                                <label class="form-check-label">
                                                    <i class="fas fa-money-bill"></i> Tunai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="metode_pembayaran[]" value="bni">
                                                <label class="form-check-label">
                                                    <img src="../assets/img/bni.png" alt="BNI Icon" width="30" height="30">
                                                    BNI
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="metode_pembayaran[]" value="mandiri">
                                                <label class="form-check-label">
                                                    <img src="../assets/img/mandiri1.png" alt="Mandiri Icon" width="30" height="30">
                                                    Mandiri
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-grid justify-content py-3">
                                            <button type="submit" class="btn btn-primary" value="Simpan">Submit Pembayaran</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>