<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce<br>
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé<br>
    d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultats</h2>

<?php

$listeMarques = ["Peugeot", "Renault", "BMW", "Mercedes"];
//Counting how many items are in the array
$arrayLength = count($listeMarques);

echo "Il y a $arrayLength marques de voitures dans le tableau :<br>";

//Listing the items with a foreach loop
echo "<ul>";
foreach ($listeMarques as $marques) {
    echo "<li>$marques</li>";
}
echo "</ul>";