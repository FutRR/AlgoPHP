<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et<br>
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus<br>
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule<br>
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un<br>
    véhicule.<br>
    v1 ➔ "Peugeot","408",5<br>
    v2 ➔ "Citroën","C4",3<br>
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de<br>
    tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments<br>
    suivants :
</p>

<h2>Résultats</h2>

<?php

//Initializing a Car class with properties being brand, model, nb of doors and current speed.
class Voiture
{
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $etat;
    private static int $i = 0;

    private int $id;


    public function __construct(string $marque, string $modele, int $nbPortes)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->etat = false;
        self::$i++;
        $this->id = self::$i;
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


    public function getNbPortes(): int
    {
        return $this->nbPortes;
    }
    public function setNbPortes(int $nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }


    public function getVitesseActuelle(): int
    {
        return $this->vitesseActuelle;
    }
    public function setVitesseActuelle(int $vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
    }


    public function demarrer()
    {
        //If car's state = true (car is started), "car is already started"
        if ($this->etat) {
            echo "Le véhicule $this est déjà démarré!<br>";
        } else {
            //changing car state to true -> car is started
            echo "Le véhicule $this démarre<br>";
            return $this->etat = true;
        }
    }

    public function accelerer(int $accel)
    {
        if (!$this->etat) { //if the car isn't started, the car can't speed up
            echo "Pour accélérer, il faut démarrer le véhicule $this !<br>";
        } else { // Setting the current speed to the speed required
            $this->vitesseActuelle += $accel;
            echo "Le véhicule $this accélère de $accel km / h<br>";
        }
    }

    public function ralentir(int $slow)
    {
        if (!$this->etat) { //if the car isn't started, the car can't slow down
            echo "Pour accélérer, il faut démarrer le véhicule $this !<br>";
        }

        if ($slow <= $this->vitesseActuelle && $this->vitesseActuelle > 0) {
            $this->vitesseActuelle -= $slow;
            echo "Le véhicule $this ralenti de $slow km / h<br>";
        } else {
            echo "Le véhicule ne peut pas ralentir au dela de 0 km /h";
        }
    }

    public function stopper()
    {
        // if the current speed is superior to 0, bring the current speed to 0
        if ($this->vitesseActuelle > 0) {
            $this->vitesseActuelle = 0;
        }
        echo "Le véhicule $this est stoppé<br>";
        return !$this->etat; // change the car state to false

    }


    public function infos()
    {
        echo "<br>************* Infos véhicule $this->id ****************<br>
                Nom et modèle du véhicule : $this<br>
                Nombres de portes : " . $this->nbPortes . "<br>
                Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km / h<br>";
        if ($this->etat) { //displaying the car state
            echo "Le véhicule $this est démarré<br>";
        } else {
            echo "Le véhicule " . $this->marque . " est à l'arrêt<br>";
        }
    }

    public function __toString()
    {
        return "$this->marque $this->modele";
    }

}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

$v1->infos();
$v2->infos();
