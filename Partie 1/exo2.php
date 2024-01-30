<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
    contenus dans celle-ci.</p>

<h2>Résultats</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
//Checking how many words are in the sentence
$longueur = str_word_count($phrase);

echo "La phrase « $phrase » contient $longueur mots.<br>";
echo "La phrase « $phrase » contient " . str_word_count($phrase) . " mots.<br>";


