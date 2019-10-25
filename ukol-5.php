<?php

$hodnota1 = 5400;

function minimum($hodnota1, $hodnota2) {
    if (!is_numeric($hodnota1) || !is_numeric($hodnota2)) {
        return False;
    }
    elseif ($hodnota1 < $hodnota2){
        return $hodnota1;
    }
    else {return $hodnota2;}
}

$minimum = minimum(56, "xy"); // tohle správně vypysuje chybu

echo $hodnota1;

if ($minimum === false) {
    echo "Chyba.";
} else {
    echo $minimum;
}
