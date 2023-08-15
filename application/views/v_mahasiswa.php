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
	<div class='container'>
		<br>
		<div>
			<a href="<?php echo base_url() ?>mahasiswa/tambah" class="btn btn-primary" role="button">Tambah Data</a>
			<a href="<?php echo base_url() ?>mahasiswa/laporan" class="btn btn-primary" role="button">Cetak Laporan</a>
		</div>

		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th> No</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal lahir</th>
					<th>Jurusan</th>
					<th>Usia</th>
					<th colspan='2'>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
                $no = 1;
                $jk = '';
                foreach ($hasil as $item) {
                    if ($item->jk == 1) {
                        $jk = 'Laki-laki';
                    } else {
                        $jk = 'Perempuan';
                    }
                ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $item->nik; ?></td>
					<td><?php echo $item->nama; ?></td>
					<td><?php echo $jk; ?></td>
					<td><?php echo $item->tanggal_lhr; ?></td>
					<td><?php echo $item->jurusan; ?></td>
					<td><?php echo $item->umur; ?></td>
					<td> <a href="<?php echo base_url() ?>mahasiswa/update/<?php echo $item->nik; ?>"
							class="btn btn-warning" role="button">Update</a>
						<a href="<?php echo base_url() ?>mahasiswa/hapus/<?php echo $item->nik; ?>"
							class="btn btn-danger" role="button">Delete</a>
					</td>
				</tr>
				<?php
                    $no++;
                }
                ?>
			</tbody>
		</table>

	</div>
</body>

</html>