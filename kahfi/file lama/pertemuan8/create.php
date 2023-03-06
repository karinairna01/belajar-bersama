<?php
require 'functions.php';

if (isset($_POST["submit"])) {
	// cek keberhasilan query
	if (tambah($_POST) > 0) {
		echo "<script>
				alert('data berhasil diinputkan!');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal diinputkan!');
				document.location.href = 'index.php';
			</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tambah data mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="container col-md-5">
		<h1 class="text-center">Tambah data mahasiswa</h1>
		<form action="" method="post">
			<div class="mb-3">
				<label class="form-label" for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" id="nama">
			</div>
			<div>
				<label class="form-label" for="nim">NIM</label>
				<input type="text" class="form-control" name="nim" id="nim">
			</div>
			<div>
				<label class="form-label" for="email">Email </label>
				<input type="text" class="form-control" name="email" id="email">
			</div>
			<div>
				<label class="form-label" for="jurusan">Jurusan </label>
				<input type="text" class="form-control" name="jurusan" id="jurusan">
			</div>
			<div>
				<label class="form-label" for="gambar">Gambar </label>
				<input type="text" class="form-control" name="gambar" id="gambar">
			</div>
			<button type="submit" name="submit" class="btn btn-primary my-3">Tambah Data!</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>