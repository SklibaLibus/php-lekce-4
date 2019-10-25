<?php

function maximum($cislo1, $cislo2){
    if (!is_numeric($cislo1) || !is_numeric($cislo2)) {
        echo "Chyba!";
    }
    elseif ($cislo1 < $cislo2){
        return $cislo2;
    }
    else {return $cislo1;}
     echo "<br>";
}
