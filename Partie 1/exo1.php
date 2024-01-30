<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<h2>Résultats</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
//Checking how many characters are in the sentence
$longueur = strlen($phrase);

echo "La phrase « $phrase » contient $longueur caractères.<br>";
echo "La phrase « $phrase » contient " . strlen($phrase) . " caractères.<br>";

?>