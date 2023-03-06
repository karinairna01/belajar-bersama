<?php
//koneksi database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    return $conn;
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function add($data)
{
    $conn = koneksi();

    // menangkap data dari form
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $nim = htmlspecialchars($data["nim"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // insert data ke database
    $query = "INSERT INTO mahasiswa
				VALUES
			(null, '$nama','$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			WHERE
				id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
