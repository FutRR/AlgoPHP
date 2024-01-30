<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de<br>
    caractère passée en argument en majuscules et en rouge.<br>
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Résultats</h2>



<?php


// Changing variable's color and changing all the letters to capital letters.
function convertirMajRouge($texte, $color)
{
    return "<p style='color: $color'>" . mb_strtoupper($texte) . "</p>";
}

$texte = "Mon texte en paramètre";
echo convertirMajRouge($texte, 'red');