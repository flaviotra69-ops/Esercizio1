<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio1</title>
</head>
<body>
    <?php
    $a= 10;
    $b= 1;
    $c= 3;
    $d= 12;
    // Calcolare la somma, dichiarando la variabile somma
    $somma= $a+ $b+ $c + $d;
    // Calcolare la media, dichiarando la variabile media
    $media= $somma/4;
    // Calcolare la mediana, dichiaranndo la variabile mediana e creando un vettore, il quale contenga
    // i valori di ogni Determinata variabile e ordinando il vettore in modo crescente
    $vettore= array($a, $b, $c, $d); // creazione del Vettore, che contiene i valori
    sort($vettore); // Ordinamento di ogni valore, in modo crescente
    $mediana= ($vettore[1] + $vettore[2]) / 2; // Calcolare la mediana prendendo i valori centrali, poichè il numero dei valori è 4
    
    // Stampare i risultati
    echo "La somma dei valori, è: $somma";
    echo "<br>";
    echo "La Media dei valori, è $media";
    echo "<br>";
    echo "La Mediana dei valori, è $mediana";
    ?>
</body>
</html>