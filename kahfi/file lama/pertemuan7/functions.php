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
    $gambar = $_FILES["gambar"]["name"];
    $tmp_name = $_FILES["gambar"]["tmp_name"];
    $ukuran = $_FILES["gambar"]["size"];
    $tipe = $_FILES["gambar"]["type"];
    $error = $_FILES["gambar"]["error"];

    // pengecekan gambar

    // jika user tidak pilih gambar
    if ($error == 4) {
        echo "<script>
				alert('harap pilih gambar terlebih dahulu!');
				document.location.href = 'create.php';
			  </script>";
        return false;
    }

    // jika ukuran file melebihi 5MB
    if ($ukuran > 5000000) {
        echo "<script>
				alert('ukuran file terlalu besar!');
				document.location.href = 'create.php';
			  </script>";
        return false;
    }

    // jika bukan gambar
    $tipeGambarAman = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $gambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $tipeGambarAman)) {
        echo "<script>
				alert('yang anda pilih bukan gambar!');
				document.location.href = 'create.php';
			  </script>";
        return false;
    }

    move_uploaded_file($tmp_name, 'img/' . $gambar);


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
