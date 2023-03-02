<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Karina", 
        "nim" => "20051397030", 
        "jurusan" => "Teknik Informatika",
        "email" => "karina@gmail.com",
        "gambar" => "karina.jpg"
    ],
    [
        "nama" => "Irna", 
        "nim" => "20051397031", 
        "jurusan" => "Teknik Informatika",
        "email" => "irna@gmail.com",
        "gambar" => "irna.jpg"
    ]
];
?>
<!DOCTYPE html>
<html >
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nim=
        <?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?>&gambar=
        <?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>