<?php
// $_GET

// $_GET["nama"] = "Reza Muhammad";
// $_GET["nrp"] = "123040224";

// var_dump($_GET);

$mahasiswa = [
    [
            "nama" => "Reza Muhammad A",
            "nrp" => "123040224",
            "email" => "rezamakbar@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "pp.jpg"
    ],
    [
            "nama" => "Anggya",
            "nrp" => "123040225",
            "email" => "anggya@gmail.com",
            "jurusan" => "Teknik Industri",
            "gambar" => "pp1.jpg"

    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>


<ul>
<?php foreach ( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"] ;?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>

