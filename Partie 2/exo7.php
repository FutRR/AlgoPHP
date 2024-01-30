<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.<br>
    Exemple :<br>
    genererCheckbox($elements);<br>
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Résultats</h2>

<?php

$elements = [
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
];

//Using a foreach loop to display the array into an html checkbox.

function genererCheckBox($elements)
{
    $result = "<form action='' method='get'>";

    foreach ($elements as $choix => $check) {

        $result .= "<input type='checkbox' $check />
                    <label>$choix</label><br>";
    }

    $result .= "</form>";
    return $result;
}
echo genererCheckBox($elements);
