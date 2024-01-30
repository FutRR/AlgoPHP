<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultats</h2>

<?php

//Converting euros to francs w/ a multiplication of the value of 1 franc in euro and the amount of franc we wish to convert.
$montantFranc = 100;
$result = $montantFranc * 0.152449;

echo "Montant en francs : $montantFranc <br>";
echo $montantFranc . " francs = " . number_format($result, 2) . " €";