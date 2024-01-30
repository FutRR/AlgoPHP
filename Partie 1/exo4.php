<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultats</h2>

<?php

//Checking if a sentence is a palindrome
function checkPalindrome($phrase)
{
    $original = $phrase;
    //Changing all capital letters to lower case
    $phrase = strtolower($phrase);
    //Erasing every space
    $phrase = str_replace(" ", "", $phrase);
    //Reversing the sentence
    $check = strrev($phrase);

    //Checking if the sentence is equal to the reversed sentence
    if ($phrase == $check) {
        echo "La phrase « $original » est un palindrome<br>";
    } else {
        echo "La phrase « $original » n'est pas un palindrome<br>";

    }
}

$phrase = "Engage le jeu que je le gagne";
checkPalindrome($phrase);