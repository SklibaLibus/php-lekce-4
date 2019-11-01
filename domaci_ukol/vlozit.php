<?php session_start();
if (isset($_POST["jmeno"]) && isset($_POST["vzkaz"]))
$jmeno = $_POST["jmeno"];
$vzkaz = $_POST["vzkaz"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vložit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
        <?php

        $udaje_z_webu = @fopen("prispevky.txt", "a");
        if ($udaje_z_webu === false) {
            echo "Uložení příspěvku se nezdařilo!";
            echo "<br><a href=\"navstevni_kniha.php\">Vrátit se zpět na návštěvní knihu.</a>";
        } else {
            fwrite($udaje_z_webu, ("<b>$jmeno</b>") . "<br>", 500);
            fwrite($udaje_z_webu, $vzkaz,50000);
            fwrite($udaje_z_webu, "<hr>");
            fclose($udaje_z_webu);
            echo "Vzkaz byl uložen.<br>";
            echo "<br><a href=\"navstevni_kniha.php\">Vrátit se zpět na návštěvní knihu.</a>";
        }

        ?>
    </div>
  </section>
  </body>
</html>
