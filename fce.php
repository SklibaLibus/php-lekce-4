<?php

function seradPrispevky($prispevky, $oddelovac) {
    $prispevky = array(jmeno, vzkaz, $oddelovac);
    $oddelovac = explode("<hr>", $prispevky);
    $serad = array_reverse($prispevky);

    }
    seradPrispevky($prispevky, $oddelovac);
}

if (file_exists("prispevky.txt")) {
    $radek = fgets($udaje_z_webu);
    echo $radek;
    fclose($udaje_z_webu);


?>