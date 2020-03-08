<?php 
//array
//membuat array asosiative
//key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nrp"=>"2300",
        "nama"=>"Didik Ariyanto",
        "jurusan"=>"Teknik Informatika",
        "email"=>"didik@gmail.com",
        "gambar"=>"icon.png"
    ],
    [
        "nrp"=>"2301",
        "nama"=>"Dwi Ariyani",
        "jurusan"=>"Teknik Informatika",
        "email"=>"dwi@gmail.com",
        "gambar"=>"icon.png"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"] ?>" width="70px" height="80px"></li>
        <li><?= $mhs["nrp"] ?></li>
        <li><?= $mhs["nama"] ?></li>
        <li><?= $mhs["jurusan"] ?></li>
        <li><?= $mhs["email"] ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>