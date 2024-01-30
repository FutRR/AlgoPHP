<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
    Soit le tableau suivant :
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<h2>Résultats</h2>

<?php

$tableauValeur = [true, "texte", 10, 25.369, array("valeur1", "valeur2")];

//Foreach loop to display array with values and type
function afficherTab($tableauValeur)
{
    foreach ($tableauValeur as $valeurs) {
        var_dump($valeurs);
        echo "<br>";
    }
}

echo afficherTab($tableauValeur);


