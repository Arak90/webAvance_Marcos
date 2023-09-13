<?php
require_once("classes/Livre.php");

$livre = new Livre;
$livre->setProp("Le petit prince", 10, "Un livre pour enfants", 5);
$livre->setMarge();
//var_dump($livre);
echo $livre->getProp();
?>