<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "les_privat";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    //fungsi tampil_siswa bertujuan untuk mengambil semua data siswa dari database 
    function tampil_siswa()
    {
        $data = mysqli_query($this->koneksi, "select * from siswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //fungsi tampil_pengajar bertujuan untuk mengambil semua data pengajar dari database
    function tampil_pengajar()
    {
        $data = mysqli_query($this->koneksi, "select * from pengajar");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //fungsi tampil_mapel bertujuan untuk mengambil semua data mata pelajaran dari database
    function tampil_mapel()
    {
        $data = mysqli_query($this->koneksi, "select * from mapel");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //fungsi tampil_jadwal bertujuan untuk mengambil semua data jadwal dari database
    function tampil_jadwal()
    {
        $data = mysqli_query($this->koneksi, "select * from jadwal");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //fungsi tampil_kehadiran bertujuan untuk mengambil semua data kehadiran siswa dari database
    function tampil_kehadiran()
    {
        $data = mysqli_query($this->koneksi, "select * from kehadiran");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //fungsi tampil_kehadiran_pengajar bertujuan untuk mengambil semua data kehadiran pengajar dari database
    function tampil_kehadiran_pengajar()
    {
        $data = mysqli_query($this->koneksi, "select * from kehadiran_pengajar");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //fungsi tampil_pembayaran bertujuan untuk mengambil semua data pembayaran dari database
    function tampil_pembayaran()
    {
        $data = mysqli_query($this->koneksi, "select * from pembayaran");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk menambahkan data baru ke dalam tabel siswa di dalam database
    function tambah_siswa($id, $nama_siswa, $jenis_kelamin, $alamat, $no_hp, $email, $jenjang)
    {
        mysqli_query($this->koneksi, "insert into siswa (id,nama_siswa,jenis_kelamin,alamat,no_hp,email,jenjang)
        values('$id','$nama_siswa','$jenis_kelamin','$alamat','$no_hp','$email','$jenjang')");
    }

    //untuk menambahkan data baru ke dalam tabel pengajar di dalam database
    function tambah_pengajar($id, $nama_pengajar, $jenis_kelamin, $alamat, $no_hp, $email, $mapel_binaan)
    {
        mysqli_query($this->koneksi, "insert into pengajar (id,nama_pengajar,jenis_kelamin,alamat,no_hp,email,mapel_binaan)
        values('$id','$nama_pengajar','$jenis_kelamin','$alamat','$no_hp','$email','$mapel_binaan')");
    }

    //untuk menambahkan data baru ke dalam tabel mata pelajaran di dalam database
    function tambah_mapel($kode_mapel, $nama_mapel, $jenjang, $kelas)
    {
        mysqli_query($this->koneksi, "insert into mapel (kode_mapel,nama_mapel,jenjang,kelas)
    values('$kode_mapel','$nama_mapel','$jenjang','$kelas')");
    }

    //untuk menambahkan data baru ke dalam tabel jadwal di dalam database
    function tambah_jadwal($kode_jadwal, $nama_pengajar, $nama_mapel, $hari, $ruang, $kelas, $waktu_mulai, $waktu_selesai)
    {
        mysqli_query($this->koneksi, "insert into jadwal (kode_jadwal,nama_pengajar,nama_mapel,hari,ruang,kelas,waktu_mulai,waktu_selesai)
    values('$kode_jadwal','$nama_pengajar','$nama_mapel','$hari','$ruang','$kelas','$waktu_mulai','$waktu_selesai')");
    }

    // Untuk menambahkan data baru ke dalam tabel kehadiran siswa di dalam database
    function tambah_kehadiran($id, $nama_siswa, $tgl_hadir, $status_hadir)
    {
        mysqli_query($this->koneksi, "insert into kehadiran (id, nama_siswa, tgl_hadir, status_hadir)
    VALUES ('$id', '$nama_siswa', '$tgl_hadir', '$status_hadir')");
    }

    //untuk menambahkan data baru ke dalam tabel kehadiran pengajar di dalam database
    function tambah_kehadiran_pengajar($id_pengajar, $nama_pengajar, $tgl_hadir, $pokok_bahasan, $status_hadir)
    {
        mysqli_query($this->koneksi, "insert into kehadiran_pengajar (id_pengajar,nama_pengajar,tgl_hadir,pokok_bahasan,status_hadir)
    values('$id_pengajar','$nama_pengajar','$tgl_hadir','$pokok_bahasan','$status_hadir')");
    }

    //untuk menambahkan data pengguna baru
    function tambah_pengguna($id, $username, $email, $password, $level)
    {
        $query = "INSERT INTO login (id, username, email, password, level) VALUES ('$id', '$username', '$email', '$password', '$level')";
        return mysqli_query($this->koneksi, $query);
    }

    //untuk menambahkan data baru ke dalam tabel pembayaran di dalam database
    function tambah_pembayaran($id_pembayaran, $nama_siswa, $kelas, $tgl_pembayaran, $jumlah, $status_pembayaran)
    {
        mysqli_query($this->koneksi, "insert into pembayaran (id_pembayaran,nama_siswa,kelas,tgl_pembayaran,jumlah,status_pembayaran)
    values('$id_pembayaran','$nama_siswa','$kelas','$tgl_pembayaran','$jumlah','$status_pembayaran')");
    }

    //untuk mengambil data yang ingin diedit dari tabel siswa dalam database
    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from siswa where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk mengambil data yang ingin diedit dari tabel pengajar dalam database
    function edit_pengajar($id)
    {
        $data = mysqli_query($this->koneksi, "select * from pengajar where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk mengambil data yang ingin diedit dari tabel mata pelajaran dalam database
    function edit_mapel($kode_mapel)
    {
        $data = mysqli_query($this->koneksi, "select * from mapel where kode_mapel='$kode_mapel'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    //untuk mengambil data yang ingin diedit dari tabel jadwal dalam database
    function edit_jadwal($kode_jadwal)
    {
        $data = mysqli_query($this->koneksi, "select * from jadwal where kode_jadwal='$kode_jadwal'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk mengambil data yang ingin diedit dari tabel kehadiran siswa dalam database
    function edit_kehadiran($id)
    {
        $data = mysqli_query($this->koneksi, "select * from kehadiran where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk mengambil data yang ingin diedit dari tabel mata pelajaran dalam database
    function edit_kehadiran_pengajar($id_pengajar)
    {
        $data = mysqli_query($this->koneksi, "select * from kehadiran_pengajar where id_pengajar='$id_pengajar'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk mengambil data yang ingin diedit dari tabel pembayaran dalam database
    function edit_pembayaran($id_pembayaran)
    {
        $data = mysqli_query($this->koneksi, "select * from pembayaran where id_pembayaran='$id_pembayaran'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    //untuk mengambil data yang ingin diupdate dari tabel siswa dalam database
    function update($id, $nama_siswa, $jenis_kelamin, $alamat, $no_hp, $email, $jenjang)
    {
        mysqli_query($this->koneksi, "update siswa set id='$id', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin',
        alamat='$alamat', no_hp='$no_hp', email='$email', jenjang='$jenjang' where id='$id'");
    }

    //untuk mengambil data yang ingin diupdate dari tabel pengajar dalam database
    function update_pengajar($id, $nama_pengajar, $jenis_kelamin, $alamat, $no_hp, $email, $mapel_binaan)
    {
        mysqli_query($this->koneksi, "update pengajar set id='$id', nama_pengajar='$nama_pengajar', jenis_kelamin='$jenis_kelamin',
        alamat='$alamat', no_hp='$no_hp', email='$email', mapel_binaan='$mapel_binaan' where id='$id'");
    }

    //untuk mengambil data yang ingin diupdate dari tabel mata pelajaran dalam database
    function update_mapel($kode_mapel, $nama_mapel, $jenjang, $kelas)
    {
        mysqli_query($this->koneksi, "update mapel set kode_mapel='$kode_mapel', nama_mapel='$nama_mapel', jenjang='$jenjang', kelas='$kelas' 
    where kode_mapel='$kode_mapel'");
    }

    //untuk mengambil data yang ingin diupdate dari tabel jadwal dalam database
    function update_jadwal($kode_jadwal, $nama_pengajar, $nama_mapel, $hari, $ruang, $kelas, $waktu_mulai, $waktu_selesai)
    {
        $kode_jadwal = mysqli_real_escape_string($this->koneksi, $kode_jadwal);

        $sql = "UPDATE jadwal SET nama_pengajar=?, nama_mapel=?, hari=?, ruang=?, kelas=?, waktu_mulai=?, waktu_selesai=? WHERE kode_jadwal=?";

        $stmt = mysqli_prepare($this->koneksi, $sql);

        // Bind parameter
        mysqli_stmt_bind_param($stmt, "ssssssss", $nama_pengajar, $nama_mapel, $hari, $ruang, $kelas, $waktu_mulai, $waktu_selesai, $kode_jadwal);

        // Execute statement
        mysqli_stmt_execute($stmt);

        // Close statement
        mysqli_stmt_close($stmt);
    }


    //untuk mengambil data yang ingin diupdate dari tabel kehadiran siswa dalam database
    function update_kehadiran($id, $nama_siswa, $tgl_hadir, $status_hadir)
    {
        mysqli_query($this->koneksi, "update kehadiran set id='$id', nama_siswa='$nama_siswa', tgl_hadir='$tgl_hadir', status_hadir='$status_hadir' 
    where id='$id'");
    }

    //untuk mengambil data yang ingin diupdate dari tabel kehadiran pengajar dalam database
    function update_kehadiran_pengajar($id_pengajar, $nama_pengajar, $tgl_hadir, $pokok_bahasan, $status_hadir)
    {
        mysqli_query($this->koneksi, "update kehadiran_pengajar set id_pengajar='$id_pengajar', nama_pengajar='$nama_pengajar', tgl_hadir='$tgl_hadir', 
    pokok_bahasan='$pokok_bahasan', status_hadir='$status_hadir' where id_pengajar='$id_pengajar'");
    }

    //untuk mengambil data yang ingin diupdate dari tabel pembayaran dalam database
    function update_pembayaran($id_pembayaran, $nama_siswa, $kelas, $tgl_pembayaran, $jumlah, $status_pembayaran)
    {
        mysqli_query($this->koneksi, "update pembayaran set id_pembayaran='$id_pembayaran', nama_siswa='$nama_siswa', kelas='$kelas', 
    tgl_pembayaran='$tgl_pembayaran', jumlah='$jumlah', status_pembayaran='$status_pembayaran' where id_pembayaran='$id_pembayaran'");
    }

    //untuk mengambil data yang ingin dihapus dari tabel siswa dalam database
    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from siswa where id='$id'");
    }

    //untuk mengambil data yang ingin dihapus dari tabel pengajar dalam database
    function hapus_pengajar($id)
    {
        mysqli_query($this->koneksi, "delete from pengajar where id='$id'");
    }

    //untuk mengambil data yang ingin dihapus dari tabel mata pelajaran dalam database
    function hapus_mapel($kode_mapel)
    {
        mysqli_query($this->koneksi, "delete from mapel where kode_mapel='$kode_mapel'");
    }

    //untuk mengambil data yang ingin dihapus dari tabel jadwal dalam database
    function hapus_jadwal($kode_jadwal)
    {
        mysqli_query($this->koneksi, "delete from jadwal where kode_jadwal='$kode_jadwal'");
    }

    // Untuk mengambil data yang ingin dihapus dari tabel kehadiran siswa dalam database
    function hapus_kehadiran($id)
    {
        mysqli_query($this->koneksi, "delete from kehadiran where id='$id'");
    }

    // Untuk mengambil data yang ingin dihapus dari tabel kehadiran pengajar dalam database
    function hapus_kehadiran_pengajar($id_pengajar)
    {
        mysqli_query($this->koneksi, "delete from kehadiran_pengajar where id_pengajar='$id_pengajar'");
    }

    // Untuk mengambil data yang ingin dihapus dari tabel pembayaran dalam database
    function hapus_pembayaran($id_pembayaran)
    {
        mysqli_query($this->koneksi, "delete from pembayaran where id_pembayaran='$id_pembayaran'");
    }

}