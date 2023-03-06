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
if (isset($_POST['submit'])) {
    // print_r($_POST);
    // print_r($_FILES);
    // die;
    if (add($_POST) > 0) {
        echo
        "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data gagal ditambahkan');
            // document.location.href = 'index.php';
        </script>";
    }
}
?>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="nim">Nim</label></td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td><label for="email">Emails</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td><input type="text" name="jurusan" id="jurusan"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Tambah</button></td>
            </tr>
        </table>
    </form>
</body>

</html>