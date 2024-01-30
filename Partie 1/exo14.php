<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

//Setting both date and birth date in string
$birthDate = "1985-01-17";

//Converting string dates into DateTime and calculating their differences.
$bd = new DateTime($birthDate);
$now = new DateTime();
$diff = $now->diff($bd);

//Printing date difference in years, months and days.
echo "Âge de la personne : " . $diff->format("%Y ans %m mois %d jours");