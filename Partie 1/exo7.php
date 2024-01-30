<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
    Poussin : entre 6 et 7 ans<br>
    Pupille : entre 8 et 9 ans<br>
    Minime : entre 10 et 11 ans<br>
    Cadet : à partir de 12 ans<br>
    Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultats</h2>

<?php

//Condition to sort children depending on their age.

$age = 5;
if ($age >= 12) {
    echo "L’enfant qui a $age ans appartient à la catégorie « Cadet »";
} elseif ($age <= 11) {
    echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
} elseif ($age <= 9) {
    echo "L’enfant qui a $age ans appartient à la catégorie « Pupille »";
} elseif ($age <= 7 && $age >= 6) {
    echo "L’enfant qui a $age ans appartient à la catégorie « Poussin »";
} else {
    echo "Catégorie non gérée";
}