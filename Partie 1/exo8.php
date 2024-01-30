<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :</p>

<h2>Résultats</h2>

<?php


//Using a for loop to run a multiplication table up to 10 times
echo "Table de 8<br>";
echo "1ère boucle<br>";
$table = 8;
for ($i = 1; $i < 11; $i++) {
    $result = $i * $table;
    echo "$table x $i = $result <br>";
}

echo "2ème boucle<br>";
//Same but with a while loop
$j = 0;
while ($j < 10) {
    $j++;
    $result = $j * $table;
    echo "$table x $j = $result <br>";
}
