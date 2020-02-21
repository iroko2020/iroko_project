<?php
session_start();

require 'script/config.php';

$requser = $bdd->prepare("SELECT * FROM membres WHERE id=?");

$requser->execute(array($_SESSION['id']));

$user = $requser->fetch();

if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {

	$newpseudo = htmlspecialchars($_POST['newpseudo']);
	$insertmbre = $bdd->prepare("UPDATE membres SET pseudo =? where id=? ");
	$insertmbre->execute(array($newpseudo, $_SESSION['id']));
	header('Location:profil.php?id=' . $_SESSION['id']);
}

if (isset($_POST['newmail']) and !empty($_POST['newmail']) and $_POST['newmail'] != $user['mail']) {

	$newmail = htmlspecialchars($_POST['newmail']);

	$insertmail = $bdd->prepare("UPDATE membres SET mail=? WHERE id=?");

	$insertmail->execute(array($newmail, $_SESSION['id']));

	header('Location:profil.php?id=' . $_SESSION['id']);
}

if (isset($_POST['newpass']) and !empty($_POST['newpass'])  and !empty($_POST['newpass2'])) {
	$pass = sha1($_POST['newpass']);
	$pass2 = sha1($_POST['newpass2']);

	if ($pass == $pass2) {
		$insertpass = $bdd->prepare("UPDATE membres SET motdepasse=? WHERE id=?");
		$insertpass->execute(array($pass, $_SESSION['id']));
		header('Location:profil.php?id=' . $_SESSION['id']);
	} else {
		$erreur = "Les mots de passe ne correspondent pas";
	}
}

//code pour afficher l'image

if (isset($_FILES['avatar']) and !empty($_FILES['avatar']['name'])) {
	$tailleMax = 2097152;
	$extensionValide = array('jpg', 'jpeg', 'gif', 'png');

	if ($_FILES['avatar']['size'] <= $tailleMax) {
		$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));

		if (in_array($extensionUpload, $extensionValide)) {
			$chemin = "membres/avatar/" . $_SESSION['id'] . "." . $extensionUpload;
			$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);

			if ($resultat) {
				$updateAvatar = $bdd->prepare("UPDATE membres SET avatar = :avatar WHERE id = :id");
				$updateAvatar->execute(array(

					'avatar' => $_SESSION['id'] . "." . $extensionUpload,
					'id' => $_SESSION['id']
				));

				header('Location:profil.php?id=' . $_SESSION['id']);
			} else {
				$erreur = "Erreur lors de l'importation de votre photo";
			}
		} else {
			$erreur = "Votre photo doit être au format 'jpg','jpeg','png' ou 'gif' ";
		}
	} else {
		$erreur = "Votre image ne doit pas dépasser 2Mo!";
	}
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edition profil|Ecam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/logo4.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Edition de mon profil
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data">

					<div class="wrap-input100  m-b-18">
						<span class="label-input100">Pseudo</span>
						<input class="input100" type="text" name="newpseudo" placeholder="Entrez votre pseudo..." value="<?php echo $user['pseudo']; ?>">


					</div>
					<div class="wrap-input100  m-b-18">
						<span class="label-input100">Mail</span>
						<input class="input100" type="text" name="newmail" placeholder="Entrez votre mail..." value="<?php echo $user['mail']; ?>">


					</div>
					<div class="wrap-input100  m-b-18">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="newpass" placeholder="Entrez votre mot de passe" value="">

					</div>
					<div class="wrap-input100  m-b-18">
						<span class="label-input100"> Confirmez Mot de passe</span>
						<input class="input100" type="password" name="newpass2" placeholder="Confirmez votre mot de passe..." value="">

					</div>
					<div class="wrap-input100  m-b-18">
						<span class="label-input100">Photo de profil</span>
						<input class="input100" type="file" name="avatar" value="">

					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Mise à jour du profil
						</button>
					</div>
					<span style="text-align: center; color: red" class="erreur">
						<?php
						if (isset($erreur)) {
							echo $erreur;
						}
						?>
					</span>
				</form>



			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>