<?php 



    function belajar(){
        echo "saya belajar PHP";
    }

    function luaspersegi($p = 5, $l = 3){
        $luas = $p * $l;

        echo $p. " x " .$l." = ".$luas;
    }

    function luas($p = 5, $l = 3){
        $luas = $p * $l;

        return $luas;
    }

    function output(){
        return "belajar function";
    }

    echo '<h1>'. output() .'</h1>';

    echo luas(100,3)* 5;



?>