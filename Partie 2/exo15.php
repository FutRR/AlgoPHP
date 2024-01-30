<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
    adresse e-mail a le bon format.</p>

<h2>Résultats</h2>

<?php

$email = "elan@elan-formation.fr";

//using a filter (validate) to see if it's accurate 

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse $email est une adresse e-mail valide";
} else {
    echo "L'adresse $email est une adresse e-mail invalide";
}