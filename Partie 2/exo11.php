<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une <br>
    chaîne de caractère représentant une date.
</p>

<h2>Résultats</h2>

<?php

// $formaterDateFr = "2018-02-23";

// function afficherDate($formaterDateFr)
// {
//     setlocale(LC_TIME, "fr_FR.utf8", "fra");

//     $result = strtotime($formaterDateFr);
//     echo date("l d F Y", $result);
// }

// echo afficherDate($formaterDateFr);


$date = new DateTime("2018-02-23");

//Displaying the date in french using the IntlDateFormatter::FULL condition.

$formatter = new IntlDateFormatter("fr_FR", IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo ucfirst($formatter->format($date));