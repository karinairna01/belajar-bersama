<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-kolom{
            background-color: red;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing = "0" >
        <?php for($i=1;$i<=5;$i++){
            echo "<tr>";
                for($j=1;$j<=5;$j++){
                    echo "<td>$i,$j</td>";
                }
            echo "</tr>";
        }
        ?>
    </table>
        <br>
    <table border="1" cellpadding="10" cellspacing = "0" >
        <?php for($x=1;$x<=5;$x++): ?>
            <?php if ( $x % 2 == 0   ): ?>
                <tr class="warna-kolom">
            <?php else: ?>
                <tr>
            <?php endif;?>
                <?php for($y=1;$y<=5;$y++):?>
                    <td> <?="$x.$y";?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>


</body>
</html>