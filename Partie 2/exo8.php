<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
    Exemple :<br>
    repeterImage($url,4);</p>

<h2>Résultats</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$count = 4;

//Using a for loop to display the img 4 times.
function repeterImage($url, $count)
{
    for ($i = 1; $i < $count; $i++) {
        $result = "<img src='$url' alt=''/>";
        echo $result;
    }
    return $result;
}

echo repeterImage($url, $count);