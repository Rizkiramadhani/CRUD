<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Load file library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Tambah mahasiswa</h2>
    <form action="<?php echo base_url()?>mahasiswa/simpan_mahasiswa" method="post">
        <div class="form-group">
            <label>NIK:</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK" />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" />
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>

            <div class="form-check">

                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" value="1">Laki-laki
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" value="2">Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lhr" class="form-control"  />
        </div>
        <div class="form-group">
            <label>Umur:</label>
            <input type="number" name="umur" class="form-control" placeholder="Umur" />
        </div>
        <div class="form-group">
            <label>Pilih Jurusan:</label>
            <select class="form-control" name="jurusan">
                <option value="TI">Teknik Informatika</option>
                <option value="SI">Sistem Informasi</option>
                <option value="TK">Teknik Komputer</option>
                <option value="MI">Manajemen Informatika</option>
                <option value="KA">Komputerisasi Akuntansi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>

    </form>
</div>
</body>
</html>