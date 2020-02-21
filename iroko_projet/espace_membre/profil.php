<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=yedimin', 'root', '');
if (isset($_GET['id']) and $_GET['id'] > 0) {
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();

?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Profil|Ecam</title>
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
							Profil de : <?= $userinfo['pseudo']; ?>
						</span>
					</div>

					<form class="login100-form validate-form" method="POST">

						<div class="wrap-input100 validate-input m-b-18">
							<span class="label-input100">Pseudo : </span>
							<?php
							if (!empty($userinfo['avatar'])) {
							?>
								<img src="membres/avatar/<?php echo $userinfo['avatar']; ?>" width="150" />
							<?php
							}
							?>

						</div>
						<div class="wrap-input100 validate-input m-b-18">
							<span class="label-input100">Pseudo : </span>
							<?= $userinfo['pseudo']; ?>

						</div>
						<div class="wrap-input100 validate-input m-b-18">
							<span class="label-input100">Mail : </span>
							<?= $userinfo['mail']; ?>

						</div>
						<?php
						if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) {
						?>
							<div class="wrap-input100 validate-input m-b-18">


								<a style="color: blue" href="editionprofil.php">Editer mon profil</a> ||
								<a style="color: blue" href="deconnexion.php">Se deconnecter</a>



							</div>
						<?php
						}
						?>
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
<?php
}
?>