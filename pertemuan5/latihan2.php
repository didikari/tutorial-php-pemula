<?php 
//melakukan pengulangan pada array
//for / foreach

$angka = [1,2,3,4,5,6,7,20];

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
            transition:1;
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
<!-- Cara Pertama menampilkan Array dengan for-->
<?php for ($i=0; $i< count($angka); $i++) :?>
    <div class="kotak"><?= $angka[$i] ?></div>
<?php endfor; ?>
<!-- end Menampilkan array-->
<div class="clear"></div>

<!--Menampilkan Array dengan foreach-->
<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a ?></div>
<?php endforeach ?>
<!--End Menampilkan array dengan foreach-->
</body>
</html>