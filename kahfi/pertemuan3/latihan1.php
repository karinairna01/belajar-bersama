<?php

// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//     echo " Hello World! <br>";
// }


// cek kondisi, ketika true baru dijalankan
// $i = 0;
// while( $i < 5 ){
//     echo " Hello World! <br>";
// $i++;
// }


//lakukan hal ini selama kondisi bernilai true, ketika kondisi false maka bloknya akan dijalankan dulu satu kali, while tdk akan jalan jika kondisi false
// $i = 10;
// do {
//     echo "Hello World! <br>";
// $i++;
// } while( $i < 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <tr>
            <?php for ( $j = 1; $j <= 5; $j++ ): ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>

</body>
</html>