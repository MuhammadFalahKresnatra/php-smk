<?php 

    // $nama = array('siti','bambang','erwin',100);

    // var_dump($nama);

    // echo "<br>";

    // foreach ($nama as $key ) {
    //     echo $key."<br>";
    // }

    $nama = array(
        "siti" => "jawa",
        "bambang" => "kalimantan",
        "erwin" => "sumatra"
    );

    var_dump($nama);

    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key." = ".$value."<br>";
    }

?>