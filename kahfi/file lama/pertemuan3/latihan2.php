<?php

$mahasiswa = [
    ["kahfi", "singaraja", 21],
    ["wikan", "bali", 31],
    ["bagas", "tuban", 32]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama : <?= $mhs[0]; ?></li>
            <li>alamat : <?= $mhs[1]; ?></li>
            <li>umur : <?= $mhs[2]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>