<?php
// cek tombol submit sudah d klik
if (isset($_POST["submit"])) {
    // cek name dan pass sudah benar
    if ($_POST["name"] == "admin" && $_POST["password"] == "123") {
        header("Location:latihan.php");
        exit;
    } else {
        // jika salah tampilkan error
        $error = "";
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3 col-md-3 ">
        <h1 class="text-center">Login</h1>
        <?php if (isset($error)) : ?>
            <p class="btn btn-danger center">error</p>
        <?php endif; ?>
        <form action="" method="post">
            <div>
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>