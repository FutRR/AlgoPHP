<style>
    form.infos {
        display: table;
    }

    div.infos {
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


<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire<br>
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe
    et<br>
    une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :<br>
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement<br>
    de validation (submit).
</p>

<h2>Résultats</h2>

<?php

$infos = ["Nom", "Prenom", "Email", "Ville"];

$genre = ["Homme", "Femme"];

$profession = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

//Using foreach loops to display all user information as form, radio buttons and selectors.

// $result = "<form action='' method='get' class='infos'>";

// foreach ($infos as $choix) {
//     $result .= "<div class='infos'>
//                 <label for=''>$choix :</label>
//                 <input type='text'/>
//                 </div>";
// }

// $result .= "</form>";

// foreach ($genre as $choice) {
//     $result .= "<input type='radio' class='btn'/>
//                 <label>$choice</label><br>";
// }

// $result .= "<select>";

// foreach ($profession as $list) {
//     $result .= "<option>$list</option>";
// }

// $result .= "</select> <br><br>
//             <input type='submit'></input>";

// return $result;


function formInfos($infos)
{

    $result = "<form action='' method='get' class='infos'>";

    foreach ($infos as $choix) {
        $result .= "<div class='infos'>
                <label for='$choix'>$choix :</label>
                <input id='$choix' type='text' name='$choix'/>
                </div>";
    }
    return $result;
}

function formGenre($genre)
{
    $result = "";
    foreach ($genre as $choice) {
        $result .= "<input type='radio' class='btn' id='$choice' name='genre' value='genre'/>
                    <label for='$choice'>$choice</label><br>";
    }
    return $result;

}

function formProf($profession)
{
    $result = "<select>";


    foreach ($profession as $list) {
        $result .= "<option>$list</option>";
    }

    $result .= "</select> <br><br>
                <input type='submit'></input>
                </form>";

    return $result;

}

function afficherInfos($infos, $genre, $profession)
{
    echo formInfos($infos);
    echo formGenre($genre);
    echo formProf($profession);
}


echo afficherInfos($infos, $genre, $profession);