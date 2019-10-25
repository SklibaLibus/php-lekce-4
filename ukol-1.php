<?php

echo "Historie přístupů:<br>";

$soubor_pristup = @fopen("pristupy.txt", "r");

if ($soubor_pristup === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
    $text = fread($soubor_pristup, 1000);
    echo $text;
    fclose($soubor_pristup);
}

$soubor_pristup = @fopen("pristupy.txt", "a");

if ($soubor_pristup === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
    fwrite($soubor_pristup, date("Y-m-d H:i:s")."<br>\n");
    fclose($soubor_pristup);
}