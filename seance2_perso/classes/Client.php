<?php

class Client//Classe Client
{
    private $nom = "Doe";//Attribut nom avec valeur par defaut
    public $adresse;
    public $telephone = "514-123-4567";//valeur par defaut
    public $courriel;
    public $naissance;

    public function setNom($nom)//Methode pour modifier la valeur de l'attribut nom
    {
        $this->nom = $nom;//$this fait reference a l'objet courant
    }
    public function getNom()//Methode pour obtenir la valeur de l'attribut nom
    {
        return $this->nom;
    }
    public function setProp($nom, $adresse, $telephone, $courriel, $naissance)//Methode pour modifier la valeur de plusieurs attributs
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->courriel = $courriel;
        $this->naissance = $naissance;
    }
    public function getProp()//Methode pour obtenir la valeur de plusieurs attributs
    {
        return $this->nom;
        return $this->adresse;
        return $this->telephone;
        return $this->courriel;
        return $this->naissance;
    }
}


$objet = new Client;//Creation d'un objet de la classe Client

//$objet->nom = "Dupont";
//$objet->adresse = "Rue de la Paix";
//$objet->telephone = "450-838-7958";//Changera sa valeur par defaut
//print_r($objet); Meme chose que vardump mais vue plus simple avec tableau
//echo "<br>";
//echo $objet->nom;//Affiche la valeur de l'attribut nom

//$objet->setNom('Brisebois');//Modification de la valeur de l'attribut nom
//var_dump($objet);

//echo $objet->getNom();//Affiche la valeur de l'attribut nom
//$objet->setProp('Brisebois', 'Rue de la Paix', '450-838-7958', 'arakun1990@hotmail.com', '1990-01-01');//Modification de la valeur de plusieurs attributs
//var_dump($objet);
//$objet->setProp('Brisebois', null, '450-838-7958', 'arakun1990@hotmail.com', null);//Modification de la valeur de plusieurs attributs
//var_dump($objet);

echo "Bonjour, je m'appelle ".$objet->getNom()." et mon numero de telephone est ".$objet->telephone.".<br>";
?>
