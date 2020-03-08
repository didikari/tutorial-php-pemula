<?php 
//melakukan pengulangan pada array
//for / foreach

$angka = [[1,2,3],[4,5,6],[7,8,9]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            background-color:salmon;
            width:50px;
            height:50px;
            text-align:center;
            line-height:50px;
            margin:3px;
            float:left;
            transition:5;
        }
        .clear{
            clear:both;
        }
        .kotak:hover{
            transform:rotate(360deg);
            border-radius:50%;
        }
    </style>
</head>
<body>

<!--Menampilkan Array dengan foreach-->
<?php foreach($angka as $a) : ?>
    <?php foreach ( $a as $b ) : ?>
    <div class="kotak"><?= $b ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach ?>
<!--End Menampilkan array dengan foreach-->
</body>
</html>