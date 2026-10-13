<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2</title>
</head>
<body>
    <?php

    $a= 10;
    $b= 5;
    // Eseguire il prodotto, utilizzando una somma iterativa
    // Dichiarare la variabile prodotto
    $risultato= 0;
    // Eseguire un ciclo for, per eseguire la somma iterativa
    for ($i = 0; $i< $b; $i ++){
        $risultato += $a;
    }
    // Stampare il Risultato
    echo "Il prodotto, è: $risultato";
    ?>
</body>
</html>