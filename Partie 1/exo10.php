<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui<br>
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et<br>
    1 €.</p>

<h2>Résultats</h2>

<?php

//Setting the price and the money paid then calculating the change.

$price = 152;
$paid = 200;

$change = $paid - $price;

echo "Montant à payer : $price<br>";
echo "Montant versé : $paid<br>";
echo "Reste à payer : $change<br>";

echo "***************************************************<br>";

//Calculating how many bills and coins of 10s, 5s, 2s and 1s the cashier has to give back with the change
$changeB = $change;

$dixB = (int) ($changeB / 10);
$changeB = $changeB - $dixB * 10;
$cinqB = (int) ($changeB / 5);
$changeB = $changeB - $cinqB * 5;
$deuxB = (int) ($changeB / 2);
$changeB = $changeB - $deuxB * 2;
$unB = (int) ($changeB / 1);
$changeB = $changeB - $unB * 1;


// ternary variable = (Condition) ? (Statement1) : (Statement2);
$dixBill = ($dixB > 1) ? "billets" : "billet";
$cinqBill = ($cinqB > 1) ? "billets" : "billet";
$deuxCoin = ($deuxB > 1) ? "pièces" : "pièce";
$unCoin = ($unB > 1) ? "pièces" : "pièce";



echo "Rendu de monnaie : <br>
    $dixB $dixBill de 10 € - $cinqB $cinqBill de 5 € - $deuxB $deuxCoin de 2 € - $unB $unCoin de 1 €";