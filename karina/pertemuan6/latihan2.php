<?php
// $mahasiswa = [
//     ["Karina", "20051397030", "Manajemen Informatika", "karinairna01@gmail.com"],
//     ["Irna", "20051397031", "Manajemen Informatika", "karinairna02@gmail.com"],
//     ["Della", "20051397032", "Manajemen Informatika", "karinairna03@gmail.com"],
// ];


// Array Associative
// sama seperti array numerik, kecuali
// key-nya adalah string yg kita buat sendiri
$mahasiswa = [
    [
              "nama" => "Karina", 
              "nim" => "20051397030", 
              "prodi" => "Manajemen Informatika",
              "gambar" => "child.png"
    ],
    [
        "nama" => "Irna", 
        "nim" => "20051397031", 
        "prodi" => "Manajemen Informatika",
        "gambar" => "kids.png"
    ]
];

?>

<!DOCTYPE html>
<html >
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama  : <?= $mhs["nama"]; ?></li>
        <li>NIM   : <?= $mhs["nim"]; ?></li>
        <li>Prodi : <?= $mhs["prodi"]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>

