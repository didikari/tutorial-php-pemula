<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
//cek tombol submit sudah ditekan
if (isset($_POST["cari"])){
    $mahasiswa = cari ($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" size="30px" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Search</button>
    </form>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php 
    $no=1;
    foreach ( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $no++; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]?>" width="40px" height="40px"></td>
        <td><?= $row["nrp"]?></td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["jurusan"]?></td>
    </tr>
    <?php endforeach ?>
    
    </table>
</body>
</html>