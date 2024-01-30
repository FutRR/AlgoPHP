<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
    qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
    suivantes :
    Peugeot 408 : $v1 = new Voiture("Peugeot","408");
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
    echo $v1->getInfos()."<br />";
    echo $ve1->getInfos()."<br />";</p>

<h2>Résultats</h2>

<?php

class Voiture
{

    private string $marque;
    private string $modele;

    public function __construct(string $marque, string $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }
    public function setMarque(string $marque)
    {
        $this->marque = $marque;
    }


    public function getModele(): string
    {
        return $this->modele;
    }
    public function setModele(string $modele)
    {
        $this->modele = $modele;
    }

    public function getInfos()
    {
        return "Nom et modèle du véhicule : $this<br>";
    }

    public function __toString()
    {
        return "$this->marque $this->modele";
    }

}

class VoitureElec extends Voiture
{

    private int $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }


    public function getAutonomie()
    {
        return $this->autonomie;
    }

    public function setAutonomie(int $autonomie)
    {
        $this->autonomie = $autonomie;
    }

    public function getInfos()
    {
        return str_replace("<br>", "", parent::getInfos()) . " " . $this->autonomie . " heures<br>";
        // Calling the parent function content and adding the child's function content
    }




}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("Porsche", "Taycan", 100);

echo $v1->getInfos();

echo $ve1->getInfos();
// $ve1->infos();