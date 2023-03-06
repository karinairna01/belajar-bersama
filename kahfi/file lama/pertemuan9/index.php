<?php
require 'functions.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$sql = "SELECT * FROM mahasiswa
				WHERE
			 nim LIKE '%$keyword%' OR
			 nama LIKE '%$keyword%' OR
			 email LIKE '%$keyword%' OR
			 jurusan LIKE '%$keyword%'
			";
	$mahasiswa = query($sql);
} else {
	$mahasiswa = query("select * from mahasiswa");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="container col-md">

		<h1 class="text-center">Data Mahasiswa</h1>

		<a href="create.php" class="btn btn-primary">Tambah data Mahasiswa</a> <a href="cetak.php" class="btn btn-success" target="_blank">Print</a>
		<br><br>

		<form action="" method="get">
			<input type="search" name="keyword" placeholder="masukkan keyword pencarian.." class="form-control" autocomplete="off" id="keyword">
			<button type="submit" name="cari" id="cari">Cari!</button>
		</form>

		<br>

		<div id="container">
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<th>Aksi</th>
					<th>Gambar</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Jurusan</th>
				</tr>

				<?php if (empty($mahasiswa)) : ?>
					<tr>
						<td colspan="7" align="center">data mahasiswa tidak ditemukan</td>
					</tr>
				<?php endif; ?>

				<?php $i = 1; ?>
				<?php foreach ($mahasiswa as $row) { ?>
					<tr>
						<td><?= $i; ?></td>
						<td><a href="ubah.php?id=<?php echo $row["id"]; ?>" class="badge text-bg-warning">ubah</a> | <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')" class="badge text-bg-danger">hapus</a></td>
						<td>
							<img src="img/<?= $row["gambar"]; ?>" width="50">
						</td>
						<td><?= $row["nim"]; ?></td>
						<td><?= $row["nama"]; ?></td>
						<td><?= $row["email"]; ?></td>
						<td><?= $row["jurusan"]; ?></td>
					</tr>
					<?php $i++; ?>
				<?php } ?>
			</table>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="script.js"></script>

</body>

</html>