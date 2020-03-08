<?php 
//variable scope / lingkup variable
//variable global milik PHP
//merupakan array ASSOSIATIVE

// $x = 10;

// function tampil(){
//     global $x;
//     echo $x;
// }
// echo $x;
//var_dump($_SERVER);

//echo $_SERVER["SERVER_NAME"];

//$_GET
//$_GET["nama"]="Didik Ariyanto";
// $_POST["nama"]="Didik";
// var_dump($_POST);

    $kaos =[
        [
            "merk"=>"Eiger",
            "jenis_kain"=>"Katun Ripstop",
            "ukuran"=>"XL",
            "warna"=>"Black",
            "gambar"=>"eiger.jpg",
            "description"=>"Eiger adalah sebuah produk kaos yang..."
        ],
        [
            "merk"=>"Cardinal",
            "jenis_kain"=>"Katun combed",
            "ukuran"=>"L",
            "warna"=>"Gray",
            "gambar"=>"eiger.jpg",
            "description"=>"Cardinal adalah sebuah produk kaos yang..."
        ],
        [
            "merk"=>"Greenlight",
            "jenis_kain"=>"Katun Combed",
            "ukuran"=>"S",
            "warna"=>"Blue",
            "gambar"=>"eiger.jpg",
            "description"=>"Greenlight adalah sebuah produk kaos yang..."
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Studi Kasus</title>
</head>
<body>
    <h1>Daftar Kaos</h1>
<?php foreach ( $kaos as $k ) : ?>
<div class="card float-left" style="width: 18rem;">
  <img src="img/<?= $k["gambar"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <ul class="list-unstyled">
    <li>Description : <?= $k["description"] ?></li>
    <a href="latihan2.php?merk=<?= $k["merk"] ?>" class="btn btn-primary">Lihat selangkapnya</a>
    </ul>
  </div>
</div>
<?php endforeach; ?>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
