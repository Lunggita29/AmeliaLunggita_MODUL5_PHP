<?php
    function luas_tabung($jari, $tinggi){
        return 2 * 3.14 * ($jari + $tinggi);
    }

    $jari = 10;
    $tinggi = 20;

    echo "Luas Tabung dengan jari-jari $jari dan tinggi $tinggi= ";
    echo luas_tabung($jari, $tinggi);
?>