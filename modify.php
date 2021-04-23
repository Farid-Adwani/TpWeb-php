<?php
session_start();
$y=$_GET["y"];
include_once 'autoload.php';
$bdd= new Requete('personne');
$req=$bdd->
header('location:home.php');
?>  