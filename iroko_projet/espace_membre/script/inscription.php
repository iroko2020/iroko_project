<?php
require 'config.php';

if (isset($_POST['ok'])) 
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$mdp1 = sha1($_POST['mdp1']);
	$mdp2 = sha1($_POST['mdp2']);
	$mail1 = htmlspecialchars($_POST['mail1']);
	$mail2 = htmlspecialchars($_POST['mail2']);

	$taillepseudo = strlen($pseudo);
	if ($taillepseudo<=20) 
	{
		if ($mail1==$mail2) 
		{
			if (filter_var($mail1, FILTER_VALIDATE_EMAIL)) 
			{

				$reqMail = $bdd->prepare("SELECT * FROM membres where mail=?");
				$reqMail->execute(array($mail1));

				$mailExist = $reqMail->rowCount();
				if ($mailExist==0) 
				{
					if ($mdp1==$mdp2) 
					{
						$reqMembre = $bdd->prepare("INSERT INTO membres(pseudo,mail,motdepasse,avatar) VALUES(?,?,?,'default.jpg')");
						$reqMembre->execute(array($pseudo,$mail1,$mdp1));

						$msg = "Enregistrement effectué avec succès! <a style='color:blue' href='connexion.php'>Se connecter?</a>";
					}
					else
					{
						$erreur = "Vos mots de passe ne correspondent pas!";
					}
				}
				else
				{
					$erreur = "Cette adresse mail existe déjà!";
				}

			}
			else
			{
				$erreur = "Votre adresse mail n'est pas valide!";
			}
		}
		else
		{
			$erreur = "Vos adresses mails ne correspondent pas!";
		}
	}
	else
	{
		$erreur = "Votre pseudo ne doit pas dépasser 20 caractères!";
	}
}


?>