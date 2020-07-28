<?php

require 'functions.php';
//cek apakah tombol sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    
    // ambil data dari tiap elemen dalam form

  



    // cek apakah data berhasil ditambah atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil')
                document.location.href ='index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal')
                document.location.href ='index.php'
            </script>
        ";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">Nama : </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" requierd>
            </li>
            <li>
                <label for="nrp">Email : </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for="nrp">Jurusan : </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="nrp">Gambar : </label>
                <input type="text" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    
    
    </form>
    
</body>
</html>