<?php
  
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

</body>
</html>


<?php
// VARIABEL DAN TIPE DATA
// VARIABEL
// tidak boleh diawali angka , boleh mengandung angka
// $nama = "Karina";

// echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %

// echo 1 + 1;

// $x = 10;
// $y = 20;
// echo $x * $y;

//penggabung string / concetenation / concat
// .
// $nama_depan = "Karina Irna";
// $nama_belakang = "Della";
// echo $nama_depan ." ". $nama_belakang; // ." ". untuk spasi

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Karina";
// $nama .= " ";
// $nama .= "Irna";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 < 5);
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");  mengecek identitas sebuah nilai

// Logika
// &&, ||, !
$x = 30;
// var_dump($x < 20 && $x %2 == 0); operator && nilai keduanya harus benar
// var_dump($x < 20 || $x %2 == 0); operator || nilai salah satunya bisa benar bisa salah
?>




