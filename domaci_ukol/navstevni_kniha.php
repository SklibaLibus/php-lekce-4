<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Návštěvní kniha</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<div class="container">

    <form action="vlozit.php" method="POST">
        <br>

        <div class="field">
            <label class="label is-size-4">Jméno:</label>
            <p class="control has-icons-left">
                <input class="input is-rounded has-background-primary" type="text" placeholder="Sem napiš jméno" name="jmeno">
                <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
            </p>
        </div>

        <div class="field">
            <label class="label is-size-4">Vzkaz:</label>
            <div class="control">
                <textarea class="textarea has-background-warning is-italic" placeholder="Sem napiš vzkaz" name="vzkaz"></textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <!-- Left empty for spacing -->
            <div class="control">
                <input class="button is-info is-outlined has-text-weight-bold" type="submit" value="Odeslat">
            </div>
        </div>
    </form>
    <br>

    <?php

    function seradPrispevky($udaje_z_webu, $oddelovac) {
        $rozdeleni = explode($oddelovac, $udaje_z_webu);
        $serazeni = array_reverse($rozdeleni);
        $spojeni = implode($serazeni, $oddelovac);

        return $spojeni;
    }

    $udaje_z_webu = @fopen("prispevky.txt", "r");
    if (file_exists("prispevky.txt")) {
        $radek = fgets($udaje_z_webu);
        echo seradPrispevky($udaje_z_webu, "<hr>");
        fclose($udaje_z_webu);
    }
    else {
        echo "Žádné příspěvky.";
    }


    ?>

</div>
</body>
</html>