<?php
// ARRAY : variabel yg dpt memiliki banyak nilai
// Pasangan antara key dan value
// key-nya adalah indeks yg dimulai dari 0
// Elemen array boleh memiliki tipe data yg beda
// membuat array cara lama

$hari = array("Senin", "Selasa");

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Rabu";
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
?>