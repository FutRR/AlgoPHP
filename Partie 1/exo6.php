<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultats</h2>

<?php
$prixHT = 9.99;
$quantity = 5;
$tax = 0.2;

//Calculating the total w/ tax with a simple math formula.

$totalTTC = $prixHT * $quantity * (1 + $tax);

echo "Prix unitaire de l’article : $prixHT € <br>";
echo "Quantité : $quantity <br>";
echo "Taux de TVA : $tax <br>";
echo "Le montant de la facture à régler est de : $totalTTC € <br>";
