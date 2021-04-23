<?php
session_start();

include_once 'autoload.php';
$bdd= new Requete('personne');
if($_POST['ID']!="##"){
    $req=$bdd->update();
}else{
    $req=$bdd->add();
    }
header('location:home.php');
?>  