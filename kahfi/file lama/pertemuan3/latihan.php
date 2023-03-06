<?php
// array

$x = [1, 2, 3, "Nika"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php print_r($x);  ?>
    <br>
    <?php var_dump($x); ?>
    <br>
    <?= $x[2]; ?>
    <br>
    <?php
    for ($y = 0; $y <= 9; $y++) {
        echo "Ini  angka = $y <br>";
    }
    ?>
    <?= $y; ?>
    <br>
    <?php foreach ($x as $x) {
        echo "ini foreach angka $x <br>";
    } ?>

</body>

</html>