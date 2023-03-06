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
	$gambar = htmlspecialchars($data["gambar"]);

	$sql = "INSERT INTO mahasiswa
				VALUES
			(null, '$nama','$nim', '$email', '$jurusan', '$gambar')";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
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
