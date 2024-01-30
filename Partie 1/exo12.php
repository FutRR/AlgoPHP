<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée<br>
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue<br>
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<h2>Résultats</h2>

<a href="https://elan-formation.fr/" target="_blank">Élan Formation<br><br></a>

<?php

//Setting an associative array with names and their language. 
$noms = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
    "Hercules" => "GRE"
];

$salutations = [
    "FRA" => "Salut",
    "ENG" => "Hello",
    "ESP" => "Hola"
];

/* Using a foreach loop to verify that array keys are matching */

foreach ($noms as $prenom => $langue) {
    if (in_array($langue, array_keys($salutations))) {
        echo $salutations[$langue] . " " . $prenom . "<br>";
    } else {
        echo "Langue inexistante <br>";
    }
}

//Sorting the array by keys for a variant.
echo "<br> Variante <br><br>";

ksort($noms);

foreach ($noms as $prenom => $langue) {
    if (in_array($langue, array_keys($salutations))) {
        echo $salutations[$langue] . " " . $prenom . "<br>";
    } else {
        echo "Langue non-reconnue <br>";
    }
}
