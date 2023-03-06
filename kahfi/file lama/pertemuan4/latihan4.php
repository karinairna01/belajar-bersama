<?php
//get
$mahasiswa = [
    ["nama" => "kahfi", "alamat" => "singaraja", "umur" => 21],
    ["umur" => 12, "nama" => "wikan", "alamat" => "denpasar"],
    ["alamat" => "tuban", "nama" => "bagas", "umur" => 32]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>

    </style>
</head>

<body>

    <h1>selamat datang <?= $_POST["name"]; ?></h1>

    <br>
    <a href="latihan3.php">back</a>
</body>

</html>