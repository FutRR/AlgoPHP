<h1>Exercice 12</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de<br>
    coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

//Setting and array with grades and calculating the average.
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$moyenne = round(array_sum($notes) / count($notes), 2);

//Using implode() to display grades with a comma between them. 
$listeNotes = implode(" ", $notes);

echo "Les notes obtenues par l'élève sont : $listeNotes <br>";
echo "Sa moyenne générale est donc de : $moyenne";