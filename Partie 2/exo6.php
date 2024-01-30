<style>
    label {
        font-family: sans-serif;
        font-size: 1rem;
        padding-right: 10px;
    }

    select {
        font-size: 0.9rem;
        padding: 2px 5px;
    }
</style>

<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau<br>
    de valeurs.<br>
    Exemple :<br>
    $elements = array("Monsieur","Madame","Mademoiselle");<br>
    alimenterListeDeroulante($elements);<br>
</p>

<h2>Résultats</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];


//Using a foreach loop to display the array into an html selector form.

function alimenterListeDeroulante($elements)
{
    $result = "<form action='' method='get'><select name='Civilité' id='civil'>
                <option value=''>--Choisissez votre civilité--></option>";

    foreach ($elements as $civ) {
        $result .= " <option value=''>$civ</option>";
    }

    $result .= "</select></form>";

    return $result;
}

echo alimenterListeDeroulante($elements);