<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 3</title>
</head>
<body>
    <?php
    $a= 20;
    $b= 3;
    // Eseguire la sottrazione, utilizzando una sottrazione Iterativa
    // Dichiarare la variabile quoziente
    $quoziente= 0;
    //Eseguire un ciclo while, per eseguire la sottrazione iterativa, sottraendo il valore della
    // variabile b alla variabile a e aumentando progressivamente il valore del quoziente
    while ($a> $b){
        $a -= $b;
        $quoziente += 1;
    }
    // Dichiarare la variabile resto, la quale assumerà il valore della variabile a

    $resto= $a;
    // Stampare il Risultatos
    echo "Il Risultato della Divisione, è: $quoziente";
    echo "<br>";
    echo "Il Resto della Divisione, è: $resto";
    ?>

</body>
</html>