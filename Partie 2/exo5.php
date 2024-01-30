<style>
    form.form-example {
        display: table;
    }

    div.form-example {
        display: table-row;
    }

    label,
    input {
        display: block;
        margin-bottom: 10px;
    }

    label {
        padding-right: 10px;
    }
</style>


<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en<br>
    précisant le nom des champs associés.<br>
    Exemple :<br>
    $nomsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php

//Array with user information.

$nomsInput = ["Nom", "Prenom", "Ville", "Nom d'utilisateur"];

//Using a foreach loop to display the array into an html form.

function afficherInput($nomsInput)
{
    $result = "<form action='' method='get' class='form-example'>";

    foreach ($nomsInput as $cat) {
        $result .= "<div class='form-example'>
                    <label for='$cat'>$cat :</label>
                    <input id='$cat' type='text' name='$cat'/>
                    </div>";
    }

    $result .= "</form>";

    return $result;
}

echo afficherInput($nomsInput);