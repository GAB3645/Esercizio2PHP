<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $capitale = 200000;
    $tasso = 30;
    $numGiorni = 10;
    $risultato = ($capitale * $tasso * $numGiorni) / 36500;



    echo "<p>CAPITALE : $capitale</p>";
    echo "<br>";

    echo "<p>TASSO: $tasso</p>";
    echo "<br>";

    echo "<p>NUMERO GIORNI: $numGiorni</p>";
    echo "<br>";

    $risultatoFormattato = number_format($risultato, 2);

    echo "<h2 style='color:green'>L'interesse calcolato è di $risultatoFormattato €</h2>";

    ?>


</body>
</html>