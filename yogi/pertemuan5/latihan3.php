<?php
// membuat array dalam array
$mahasiswa = [
    ["Moch Yogi Firmansyah", "20051397030", "Manajemen Informatika", "yogi@gmail.com"],
    ["Sandhika Galih", "20051397031", "Manajemen Informatika", "sandhika@gmail.com"],
    ["Doddy Setiawan", "20051397032", "Manajemen Informatika", "dody@gmail.com"],

];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Prodi : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>