<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($sql)
{
	global $conn;
	$result = mysqli_query($conn, $sql);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function hapus($id)
{
	global $conn;
	mysqli_query($conn, "delete from mahasiswa where id = $id");

	return mysqli_affected_rows($conn);
}
function tambah($data)
{
	global $conn;

	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$sql = "INSERT INTO mahasiswa
				VALUES
			(null, '$nama','$nim', '$email', '$jurusan', '$gambar')";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}
function upload()
{
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			</script>";
		return false;
	}

	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			</script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}


function ubah($data)
{
	global $conn;

	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);
	$gambar = $data['gambar'];

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambar;
	} else {
		$gambar = upload();
	}

	$sql = "UPDATE mahasiswa SET
				nim = '$nim',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			WHERE
				id = $id
			";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}

function update($data)
{
	global $conn;
	$id = $data['id'];
	$name = $data['name'];
	$email = $data['email'];
	$prodi = $data['prodi'];
	$gambar = $data['gambar'];

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambar;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE students SET 
        name='$name', 
        email='$email', 
        prodi='$prodi', 
        gambar='$gambar' WHERE id = $id
        ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
