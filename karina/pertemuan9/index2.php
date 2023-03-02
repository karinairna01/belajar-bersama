<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query
$result = mysqli_query($conn, "SELECT * from mahasiswa");

// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() // fungsinya mengembalikkan array numerik
// mysqli_fetch_assoc() // fungsinya mengembalikkan array associative
// mysqli_fetch_array() // fungsinya mengembalikkan keduanya
// mysqli_fetch_object() //

// while( $mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php while($row=mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row ["gambar"];?>" width="50"></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["nim"];?>/td>
        <td><?= $row["email"];?></td>
        <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
</html>