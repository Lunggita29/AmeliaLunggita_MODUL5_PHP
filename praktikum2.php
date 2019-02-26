<?php
    function volume_tabung($jari, $tinggi){
        return 3.14 * $jari * $jari * $tinggi;
    }

    $jari = 10;
    $tinggi = 12;

    echo "Volume Tabung dengan jari-jari $jari dan tinggi $tinggi = ";
    echo volume_tabung($jari, $tinggi);
?>