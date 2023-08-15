<!DOCTYPE html>
<html>
<?php
?>

<head>
	<title>Laporan Data</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
	body {
		font-family: Arial, sans-serif;
	}

	.container {
		margin-top: 20px;
	}

	h2 {
		text-align: center;
		margin-bottom: 20px;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-top: 10px;
	}

	th,
	td {
		border: 1px solid #ddd;
		padding: 8px;
		text-align: left;
	}

	th {
		background-color: #f2f2f2;
	}
	</style>
</head>

<body>
	<div class="container">
		<h2>Laporan Data</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Jurusan</th>
					<th>Umur</th>
				</tr>
			</thead>
			<tbody>

				<?php if (is_array($hasil) || is_object($hasil)) { ?>
				<?php
					$jk = '';
					foreach ($hasil as $item) {
						if ($item->jk == 1) {
							$jk = 'Laki-laki';
						} else {
							$jk = 'Perempuan';
						}
					?>
				<tr>
					<td><?php echo isset($item->nik) ? $item->nik : ''; ?></td>
					<td><?php echo isset($item->nama) ? $item->nama : ''; ?></td>
					<td><?php echo isset($jk) ? $jk : ''; ?></td>
					<td><?php echo isset($item->tanggal_lhr) ? $item->tanggal_lhr : ''; ?></td>
					<td><?php echo isset($item->jurusan) ? $item->jurusan : ''; ?></td>
					<td><?php echo isset($item->umur) ? $item->umur : ''; ?></td>
				</tr>
				<?php } ?>
				<?php } else { ?>
				<tr>
					<td colspan="6">Tidak ada data yang tersedia.</td>
				</tr>
				<?php } ?>


			</tbody>
		</table>
	</div>
</body>

</html>