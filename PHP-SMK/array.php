<?php 

    //ARRAY DIMENSI

    // $nama = array("Joni","Tejo","Budi","Siti",100, 2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";
    
    // for ($i=0; $i < 6; $i++) { 
    //     //echo $i;
    //     echo $nama[$i]."<br>";
    // }

    // foreach ($nama as $key ) {
    //     echo $key."<br>";
    // }

    //ARRAY ASOSIATIF

    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "malang raya",
    //     "tejo" => "jakarta",
    //     "siti" => "sidoarjo"
    // );

    $nama["joni"]="surabaya";
    $nama["budi"]="malang raya";
    $nama["tejo"]="jakarta";
    $nama["siti"]="sidoarjo";
    $nama["edi"]="semarang";

    var_dump($nama);

    echo "<br>";

    //echo $nama['budi'];

    foreach ($nama as $key => $value) {
        echo $key." => ".$value."<br>";
    }
?>