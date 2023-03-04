<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container ">


        <h1>Daftar Mahasiswa</h1>

        <a href="create.php" class="btn btn-success">Tambah data mahasiswa</a>
        <br><br>
        <form action="" method="post">
            <div>
                <input type="text" name="keyword" class="form-control w-25" autofocus id="keyword">
                <button type="submit" name="cari" class="btn btn-primary " id="tombolCari">Search</button>
            </div>
        </form>
        <br>

        <div id="container1">
            <table class="table table-striped">
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
                <?php foreach ($mahasiswa as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?php echo $row["id"]; ?>" class="badge text-bg-warning">ubah</a> |
                            <a href="hapus.php?id=<?php echo $row["id"]; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">hapus</a>
                        </td>
                        <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["nim"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["jurusan"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>