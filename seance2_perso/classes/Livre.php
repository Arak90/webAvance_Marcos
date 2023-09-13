<?php

class Livre 
{
    public $isbn;
    public $titre;
    public $datePublication;
    public $genre;
    public $prix;
    public $description;
    public $cout;
    public $marge;

    public function setProp($titre, $prix, $description, $cout)//setProp est une fonction qui permet de définir les propriétés de l'objet Livre
    {
        $this->titre = $titre;
        $this->prix = $prix;
        $this->description = $description;
        $this->cout = $cout;
        $this->setMarge();//Appel de la fonction setMarge
    }

    public function getProp()//getProp est une fonction qui permet d'obtenir les propriétés de l'objet Livre
    {
        
        return "Livre: ".$this->titre."<br> Prix: ".$this->prix."<br> Description: ".$this->description." <br>Cout: ".$this->cout." <br>Marge: ".$this->marge."<br>";
    }

    public function setMarge()//setMarge est une fonction qui permet de calculer la marge de profit
    {
        $this->marge = $this->prix - $this->cout;//Calcul de la marge de profit
    }
}
?>