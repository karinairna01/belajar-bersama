<?php
// ARRAY : variabel yg dpt memiliki banyak nilai
// Pasangan antara key dan value
// key-nya adalah indeks yg dimulai dari 0
// Elemen array boleh memiliki tipe data yg beda
// membuat array cara lama
$hari = array("Senin", "Selasa");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false]; 

// cara menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array menggunakan echo
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Rabu";
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);
?>