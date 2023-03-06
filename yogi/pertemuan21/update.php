<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<?php
require 'functions.php';
$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
// print_r($mhs);
if (isset($_POST['update'])) {
    // print_r($_POST);
    // print_r($_FILES);
    // die;
    if (update($_POST) > 0) {
        echo
        "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal diubah');
            // document.location.href = 'index.php';
        </script>";
    }
}
?>

<body>
    <h1>Ubah Data</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <input type="hidden" name="oldPhoto" value="<?= $mhs['gambar'] ?>">
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nim">Nim</label></td>
                <td><input type="text" name="nim" id="nim" value="<?= $mhs['nim'] ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Emails</label></td>
                <td><input type="text" name="email" id="email" value="<?= $mhs['email'] ?>"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td><input type="file" name="gambar" id="gambar"></td>
                <td><img src="img/<?= $mhs['gambar'] ?>" width="100px"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="update">Ubah</button></td>
            </tr>
        </table>
    </form>
</body>

</html>