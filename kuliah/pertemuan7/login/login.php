<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 7 - 13 Maret 2021
    Mempelajari mengenai GET & POST
*/
?>

<?php 
// cek apakah tombol submit sudah ditekan atau beluum
if( isset($_POST["submit"]) ) {
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h1>Login Admin</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font: font-style: italic;">username / password salah!</p>
    <?php endif; ?>


    <ul>
    <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>

    </form>
    </ul>

    
</body>
</html>