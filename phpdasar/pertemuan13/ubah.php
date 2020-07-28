<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query ("SELECT * FROM mahasiswa WHERE id = $id")[0];
 


//cek apakah tombol sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    
    // ambil data dari tiap elemen dalam form

    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah')
                document.location.href ='index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah')
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
    <title>Ubah data Mahasiswa</title>
</head>
<body>
    <h1>Ubah data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">Nama : </label>
                <input type="text" name="nama" required
                value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" requierd
                value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for="nrp">Email : </label>
                <input type="text" name="email"
                value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="nrp">Jurusan : </label>
                <input type="text" name="jurusan"
                value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="nrp">Gambar : </label>
                <img src="img/<?= $mhs['gambar']; ?>" width='40' alt="">
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    
    
    </form>
    
</body>
</html>