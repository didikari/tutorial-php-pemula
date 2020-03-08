<?php 

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["login"])){
    //cek username dan password
    if ($_POST["username"]=="admin" && $_POST["password"]=="admin"){
        //jika benar redirect ke halaman admin
        header("Location:admin.php");
    }else{
        $error=true;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)) : ?>
    <h2 style="color:red">Username dan Password Salah</h2>
    <?php endif;?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="text" name="password" id="password">
        </li>
        <button type="submit" name="login">Login</button>
    </form>
    </ul>
</body>
</html>