<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Les Privat</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h4 class="text-center font-weight-light my-3">Buat Akun Baru</h4>
                                </div>
                                <?php if (isset($error)) {
                                    echo "<p class='error'>$error</p>";
                                } ?>
                                <div class="card-body mt-3">
                                <form id="registrationForm" action="proses_register.php" method="post">
                                        <div class="mb-1">
                                            <label for="username" class="form-label">Username </label>
                                            <input type="text" class="form-control" name="username">
                                            <div id="username" class="form-text"></div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email">
                                            <div id="email" class="form-text"></div>
                                        </div>

                                        <div class="mb-1">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password">
                                            <div id="password" class="form-text"></div>
                                        </div>

                                        <div class="mb-1">
                                        <label for="level" class="form-label">Level</label>
                                            <select class="form-select" name="level" id="levelSelect">
                                                <option value="admin">Admin</option>
                                                <option value="siswa">Siswa</option>
                                                <option value="pengajar">Pengajar</option>
                                            </select>
                                        <div id="level" class="form-text"></div>
                                    </div>
                                    <div class="d-grid justify-content py-3">
                                        <button type="submit" class="btn btn-primary" value="Simpan">Buat Akun</button>
                                    </div>
                                </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                <div class="small"><a href="index.php">Sudah Punya Akun? Login Disini</a></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-2 bg-light">
                <div class="container-fluid px-3">
                    <div class="d-flex align-items-center justify-content-center small" style="height: 100px;">
                    <div class="text-muted">&copy; Sistem Les Privat 2023</div>
                </div>

                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>
