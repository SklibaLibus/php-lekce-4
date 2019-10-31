
<?php

// zápis do souboru (na konec souboru) => "a" append

//$soubor1 = @fopen("soubor.txt", "a");
//if ($soubor1 === false) {
//    echo "Soubor se nepodařilo otevřít!";
//} else {
//    fwrite($soubor1, "Text na nový řádek.<br>\n");
//    fclose($soubor1);
//}

// čtení ze souboru => "r" read

$soubor1 = @fopen("soubor.txt", "r");
if ($soubor1 === false) {
    echo "Soubor se nepodařilo otevřít!";
} else {
    while (($line = fgets($soubor1, 1000)) !== false){
        echo $line;
        echo "<br>";
    }
    fclose($soubor1);
}