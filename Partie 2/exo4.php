<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra<br>
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un<br>
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br><br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
    https://fr.wikipedia.org/wiki/<br><br>
    Le tableau passé en argument sera le suivant :<br>
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Résultats</h2>

<?php

$capitales = [
    "Allemagne" => "Berlin",
    "Espagne" => "Madrid",
    "France" => "Paris",
    "Italie" => "Rome",
    "USA" => "Washington"
];


//Sorting the array by values

asort($capitales);

//Using a foreach loop to display the array from exercise 2 with wiki links added in a new column.

function afficherTableHTML($capitales)
{
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Lien Wiki</th>
                    </tr>
                </thead>    
                <tbody>";

    foreach ($capitales as $paysMaj => $capitalCities) {
        $result .= "<tr>
                        <td>" . strtoupper($paysMaj) . "</td>
                        <td>" . $capitalCities . "</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitalCities' target='_blank'>Lien wiki</a></td>";
    }

    $result .= "</tbody></table>";

    return $result;
}

echo afficherTableHTML($capitales);