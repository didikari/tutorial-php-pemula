<?php 
//koneksi database

$conn = mysqli_connect("localhost","root","macos94#","phpdasar");

//ambil data dari table mahasiswa / query data mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() //mengembalikan array assosiative
//mysqli_fetch_array() // mengembalikan keduanya
//mysqli_fetch_object

// while ($mhs = mysqli_fetch_assoc ($result)){
//     var_dump($mhs);
// }

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
    while( $row = mysqli_fetch_assoc($result)) :?>
    <tr>
        <td><?= $no++; ?></td>
        <td>
            <a href="ubah.php">ubah</a> |
            <a href="hapus.php">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]?>" width="40px" height="40px"></td>
        <td><?= $row["nrp"]?>/td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["jurusan"]?></td>
    </tr>
    <?php endwhile ?>
    
    </table>
</body>
</html>