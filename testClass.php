<?php
//include_once 'classes/personne.php';
include_once 'autoload.php';
$personne = new Personne('sellaouti', 'aymen', 38);
$voiture = new Voiture();
$voiture->whoAmI();
echo $personne;