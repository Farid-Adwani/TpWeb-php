<?php
include_once 'autoload.php';
session_start();
$email = $_POST['email'];
$password = $_POST['pwd'];
$bdd=new Requete('user');
$req=$bdd->findBycondition("email='$email' AND passwd='$password'");
if ($email!="" && $password!="") {
    if ($req) {
        $_SESSION['connect']=$req[0]->id;
        $_SESSION['nomadmin']=$req[0]->nom;
        $_SESSION['prénomadmin']=$req[0]->prenom;
        $_SESSION['connected']="Bienvennue dans votre compte administrateur <°°> "; 
        header('location:home.php');
    } else {
        $_SESSION['errorMessage']="Compte introuvable Veuillez vérifier vos credenitals";
        header('location:index.php');
    }
} else {
    $_SESSION['errorMessage']="Veuillez remplir les champs ";
    header('location:index.php');
}
?>