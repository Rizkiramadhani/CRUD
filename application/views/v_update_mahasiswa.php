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
		<h2>Update mahasiswa #<?php echo $ambil->nik; ?></h2>
		<form action="<?php echo base_url()?>mahasiswa/simpan_update" method="post">

			<input type="hidden" name="nik" value="<?php echo $ambil->nik; ?>" />

			<div class="form-group">
				<label>Nama:</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $ambil->nama; ?>"
					placeholder="Nama" />
			</div>
			<div class="form-group">
				<label>Jenis Kelamin:</label>

				<div class="form-check">
					<?php
                if ($ambil->jk==1){
                    $laki_laki="checked";
                    $perempuan="";
                }else {
                    $perempuan="checked";
                    $laki_laki="";
                }

                ?>

					<label class="form-check-label">
						<input type="radio" class="form-check-input" <?php echo $laki_laki; ?> name="jk"
							value="1">Laki-laki
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" <?php echo $perempuan; ?> name="jk"
							value="2">Perempuan
					</label>
				</div>
			</div>
			<div class="form-group">
				<label>Tanggal Lahir:</label>
				<input type="date" name="tanggal_lhr" value="<?php echo $ambil->tanggal_lhr;?>" class="form-control" />
			</div>
			<div class="form-group">
				<label>Umur:</label>
				<input type="number" name="umur" class="form-control" value="<?php echo $ambil->umur; ?>"
					placeholder="Umur" />
			</div>
			<div class="form-group">
				<?php
                $ti="selected";
                $si="";
                $tk="";
                $mi="";
                $ka="";
            if ($ambil->jurusan=='TI'){
                $ti="selected";
            }else if ($ambil->jurusan=='SI'){
                $si="selected";
            }else if ($ambil->jurusan=='TK'){
                $tk="selected";
            }else if ($ambil->jurusan=='MI'){
                $mi="selected";
            }else if ($ambil->jurusan=='KA'){
                $ka="selected";
            }
            ?>

				<label>Pilih Jurusan:</label>
				<select class="form-control" name="jurusan">
					<option <?php echo $ti; ?> value="TI">Teknik Informatika</option>
					<option <?php echo $si; ?> value="SI">Sistem Informasi</option>
					<option <?php echo $tk; ?> value="TK">Teknik Komputer</option>
					<option <?php echo $mi; ?> value="MI">Manajemen Informatika</option>
					<option <?php echo $ka; ?> value="KA">Komputerisasi Akuntansi</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Update</button>

		</form>
	</div>
</body>

</html>