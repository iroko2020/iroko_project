<?php
require 'config.php';

if (isset($_POST['oknews'])) {

    $letter = htmlspecialchars($_POST['letter']);

    if (!empty($letter)) 
    {
        $reqLetter = $bdd->prepare("INSERT INTO newsletter(letter) VALUES(?)");
        $reqLetter->execute(array($letter));

        $erreur = "Abonnement effectué  avec succès!";
    }
    else 
    {
        $erreur = "Veuillez renseigner votre mail ";
    }
} 

