<?php

// Date : menampilkan tgl dgn format tertentu
// l:hari   d:tanggal   M:bulan m:bulan dlm bentuk angka  Y:tahun
    // echo date("l, d-M-Y");


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak januari 1970
// echo time();

// hitung 3 bulan kedepan 
// echo date("d M Y", time()+60*60*24*100);

// tanggal lahir
// mktime : membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,10,1,2002));

//strtotime
echo date("l", strtotime("1 oct 2002"));
