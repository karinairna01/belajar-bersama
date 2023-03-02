<?php
// membuat array dalam array
$mahasiswa = [
    ["Karina", "20051397030", "Manajemen Informatika", "karinairna01@gmail.com"],
    ["Irna", "20051397031", "Manajemen Informatika", "karinairna02@gmail.com"],
    ["Della", "20051397032", "Manajemen Informatika", "karinairna03@gmail.com"],
    
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
    <li>Nama  : <?= $mhs[0]; ?></li>
    <li>NIM   : <?= $mhs[1]; ?></li>
    <li>Prodi : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>