<?php
//cek apakah tombol ditekan atau belum
if( isset($_POST["submit"])) {
    if( $_POST["username"] =="admin" && $_POST["password"] == "123") {


  


//cek uname pass


//jika benar, redirect ke admin
        header("Location: admin.php");
        exit;
} else {
    //jika salah, ada pesan salah
    $error = true;
}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if (isset($error) ) :?>
        <p style="color: red; font-style: italic;">Username / Password salah</p>
    <?php endif; ?>

    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password"> Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>


    </form>
    </ul>



</body>
</html>