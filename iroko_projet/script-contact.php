<?php
require 'config.php';

if (isset($_POST['ok'])) 
{
	
	$nom = htmlspecialchars($_POST['nom']);
	$mail = htmlspecialchars($_POST['mail']);
	$contenu = htmlspecialchars($_POST['contenu']);
	
	

	$taillepseudo = strlen($nom);
	if ($taillepseudo<=20) 
	{
		
		if (!empty($nom) and !empty($mail) and !empty($contenu)) 
		{
			$reqCol = $bdd->prepare("INSERT INTO contact(nom,mail,contenu) VALUES(?,?,?)");
			$reqCol->execute(array($nom,$mail,$contenu));

			$erreur = "Message envoyé  avec succès!";
		}
		
		else
		{
			$erreur = "Veuillez renseigner tous les champs! ";
		}
				
	}
	else
	{
		$erreur = "Votre nom ne doit pas dépasser 20 caractères!";
	}
}
