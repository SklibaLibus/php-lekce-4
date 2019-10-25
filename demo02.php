<?php
//// Vytvoření funkce:
//
//function vypis_datum_cas() {
//    echo date("Y-m-d H:i:s");
//    echo "<br>";
//}
//
//// Volání funkce:
//
//vypis_datum_cas();
//sleep(1);
//vypis_datum_cas();


function vypisPozdrav($denniDoba, $osloveni = "člověku") {
    echo "Dobré $denniDoba, $osloveni!";
}

function vypocet($a, $b, $c) {
    echo $a + $b + $c;
}

vypocet(5, 6, 8);

$denniDoba = 'ráno';
vypisPozdrav($denniDoba, 'Karle'); // to, co je uvedeno tady má přednost před tím, co je uvedeno v těle fce
// vypíše: Dobré ráno, Karle!