<?php 

    // OPERATOR MATEMATIKA

    $a = 2;
    $b = 5;
    $c = $a + $b;

    echo $c;

    echo "<br>";

    $c = $a - $b;
    echo $c;

    echo "<br>";

    $c = $a * $b;
    echo $c;

    echo "<br>";

    $c = $a / $b;
    echo floor($c);

    echo "<br>";

    $c = $a % $b;
    echo $c;

    echo "<br>";

    // OPERATOR LOGIKA

    $c = $a < $b;
    echo $c;

    echo "<br>";

    $c = $a > $b;
    echo $c;

    echo "<br>";

    $c = $a == $b;
    echo $c;

    echo "<br>";

    $c = $a != $b;
    echo $c;

    echo "<br>";

    // INCREMENT
    $a++;
    echo $a;

    echo "<br>";
    //  OPERATOR STRING

    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata.$kota;

    $hasil .= ' KOTA PAHLAWAN';
    echo $hasil;

?>