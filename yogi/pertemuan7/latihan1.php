<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Yogi",
        "nim" => "20051397030",
        "jurusan" => "Teknik Informatika",
        "email" => "yogi@gmail.com",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Doddy",
        "nim" => "20051397031",
        "jurusan" => "Teknik Informatika",
        "email" => "Doddy@gmail.com",
        "gambar" => "gambar2.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=
        <?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=
        <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>