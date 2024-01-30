<h1>Exercice 2</h1>

<p>Soit le tableau suivant :<br>
    $capitales = array<br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays<br>
    s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br>
    une fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultats</h2>

<?php

//Associative array w/ countries as keys and capitals as values

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington DC",
    "Italie" => "Rome"
];

//Using a foreach loop inside a function to display the array into an HTML table.

function afficherTableHTML($capitales)
{
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($capitales as $paysMaj => $capitalCities) {
        $result .= "<tr><td>" . strtoupper($paysMaj) . "</td><td>" . $capitalCities . "</td></tr>";
    }
    $result .= "</tbody></table>";

    return $result;
}

echo afficherTableHTML($capitales);