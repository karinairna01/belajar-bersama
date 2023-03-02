<?php


// Array Associative
// sama seperti array numerik, kecuali
// key-nya adalah string yg kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Yogi",
        "nim" => "20051397030",
        "prodi" => "Manajemen Informatika",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Firmansyah",
        "nim" => "20051397031",
        "prodi" => "Manajemen Informatika",
        "gambar" => "gambar2.jpeg"
    ]
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
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Prodi : <?= $mhs["prodi"]; ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>
