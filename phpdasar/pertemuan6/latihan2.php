<?php
// $mahasiswa = [
//     ["Reza Muhammad", "123040224","rezamakbar@gmail.com","Teknik Informatika"],
//     ["Anggya", "123040225","anggya@gmail.com","Teknik Informatika"],
//     ["Espe", "123040226","espe@gmail.com","Teknik Industri"]
// ];

// Array Associative sama seperti array, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
            "nama" => "Reza Muhammad",
            "nrp" => "123040224",
            "email" => "rezamakbar@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "reza.jpg"
    ],
    [
            "nama" => "Anggya",
            "nrp" => "123040225",
            "email" => "anggya@gmail.com",
            "jurusan" => "Teknik Industri",
            "gambar" => "anggya.jpg"

    ]
];
// echo $mahasiswa[1]["tugas"][0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>