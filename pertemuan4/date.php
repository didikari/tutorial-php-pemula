<?php 

    //untuk menampilkan tanggal dengan  format tertentu
    //echo date("d M Y");

    //time
    //Unix timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 januari 1970

    //echo time();
    //echo date("d-m-y", time()-60*60*24*100);

    //mktime
    //membuat sendiri detik
    //mktime(0,0,0,0,0,0,)
    //jam, menit, detik, bulan ,tanggal, tahun
    //echo date("l",mktime(0,0,0,9,28,1994));

    //strtotime
    echo date("l",strtotime("28 Sep 1994"));


?>