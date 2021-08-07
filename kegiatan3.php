<?php
    function penjumlahan ($a,$b) {
        echo "Penjumlahan";
        echo "<br>";
        echo "20 + 30 = "; 
        echo $a+$b;
        echo "<br>";
    }

    function pengurangan ($a,$b) {
        echo "Pengurangan";
        echo "<br>";
        echo "20 - 30 = "; 
        echo $a-$b;
        echo "<br>";
    }

    function pembagian ($a,$b) {
        echo "Pembagian";
        echo "<br>";
        echo "10 / 2 = ";
        echo $a/$b;
        echo "<br>";
    }

    function perkalian ($a) {
        echo "Perkalian";
        echo "<br>";
        echo "10 * 10 = ";
        echo $a*$a;
    }

    penjumlahan(20,30);
    pengurangan(20,30);
    pembagian(10,2);
    perkalian(10);
?>