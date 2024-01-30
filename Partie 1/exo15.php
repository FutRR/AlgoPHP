<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php

class Personne
{
    //Defining properties and their type
    private string $_nom;
    private string $_prenom;
    private DateTime $_birthDate;

    //Setting properties with a constructor
    public function __construct(string $nom, string $prenom, string $birthDate)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birthDate = new DateTime($birthDate);
    }

    //Returning properties with a getter
    public function getNom(): string
    {
        return $this->_nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function getbirthDate(): DateTime
    {
        return $this->_birthDate;
    }

    /* Setting properties */

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setBirthDate(DateTime $birthDate)
    {
        $this->_birthDate = $birthDate;
    }

    //Setting $now as today's date and defining the interval between $birtDate and $now
    public function getAge()
    {
        $now = new DateTime();
        $interval = $this->_birthDate->diff($now);
        return $interval->format("%Y");
    }

    //Using a function to print object by returning their properties
    public function __toString()
    {
        return $this->getNom() . " " . $this->getPrenom() . " a " . $this->getAge() . " ans. <br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "19-02-1980");
$p2 = new Personne("DUCHEMIN", "Alice", "17-01-1985");

echo $p1;
echo $p2;