<?php   
//array
//sebuah variabel yang bisa memiliki banyak nilai
//pasangan key dan value
// keynya adalah index, yang dimulai dari nol

//membuat array
// cara lama
$hari = array("Senin", "Selasa");

// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


//menampilkan array
// var_dump() / print_r()
// var_dump ($hari);
// echo "<br>";
// print_r ($hari);
// echo "<br>";

//menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];


//menambahkan elemen pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump ($hari);




?>