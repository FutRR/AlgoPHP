<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de<br>
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>Résultats</h2>

<?php

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

//Using a foreach loop to display as radio buttons.
function afficherRadio($nomsRadio)
{
    $result = "<form action='' method='get'>";

    foreach ($nomsRadio as $civil) {
        $result .= "<input type='radio'id='$civil' name='civilité' value='civilité'/>
                    <label for='$civil'>" . $civil . "</label><br>";
    }

    $result .= "</form>";
    return $result;
}

echo afficherRadio($nomsRadio);