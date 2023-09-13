<?php

class Personne 
{
    public $nom;
    public $adresse;
    public $codePostal;
    public $telephone;
    public $courriel;
}

$dupont = new Personne;
$dupont->nom = "Dupont";
var_dump($dupont);

?>