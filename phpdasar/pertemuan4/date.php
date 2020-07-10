<?php
    // echo date("z, l, d-M-Y");

    // echo time(); // UNIX timestamp, detik yang sudah berlalu sejak 1970
    echo date("d M Y", time()+60*60*24*100);

    //mktime
    //membuat sendiri detik
    // echo date("l", mktime(0,0,0,9,25,1994));
    //jam, menit, detik, bulan, tanggal, tahun

    //strtotime
    // echo date ('l', strtotime("25 September 1994"));
    