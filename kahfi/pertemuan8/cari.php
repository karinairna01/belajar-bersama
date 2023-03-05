<?php
require 'functions.php';
$keyword = $_GET['keyword'];
$sql = "SELECT * FROM mahasiswa
			WHERE
		nim LIKE '%$keyword%' OR
		nama LIKE '%$keyword%' OR
		email LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%'
		";
$mahasiswa = query($sql);
?>

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
			<td><a href="ubah.php?id=<?php echo $row["id"]; ?>" class="badge text-bg-warning">ubah</a> | <a class="badge text-bg-danger" href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a></td>
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