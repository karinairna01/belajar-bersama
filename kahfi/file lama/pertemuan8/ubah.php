<?php
require 'functions.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST["ubah"])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Ubah Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<style>
		ul li {
			list-style: none;
		}
	</style>
</head>

<body>
	<div class="container col-md-5">
		<h1>Ubah Data Mahasiswa</h1>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">

			<div class="md-3">
				<label class="form-label" for="nim">NIM : </label>
				<input type="text" class="form-control" name="nim" id="nim" value="<?php echo $mhs["nim"]; ?>">

			</div>
			<div class="md-3">
				<label class="form-label" for="nama">nama : </label>
				<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $mhs["nama"]; ?>">


			</div>
			<div class="md-3">
				<label class="form-label" for="email">email : </label>
				<input type="text" class="form-control" name="email" id="email" value="<?php echo $mhs["email"]; ?>">
			</div>
			<div class="md-3">
				<label class="form-label" for="jurusan">jurusan : </label>
				<input type="text" class="form-control" name="jurusan" id="jurusan" value="<?php echo $mhs["jurusan"]; ?>">
			</div>
			<div class="md-3">
				<label class="form-label" for="gambar">gambar : </label>
				<input type="file" class="form-control" name="gambar" id="gambar" value="<?php echo $mhs["gambar"]; ?>">
				<td><img src="img/<?= $mhs['gambar'] ?>" width="100px"></td>
			</div>

			<button type="submit" name="ubah" class="btn btn-primary my-4">Ubah Data!</button>

		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>