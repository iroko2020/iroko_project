<?php

include 'script-contact.php';
include 'script-newsletter.php';
include 'Dashboard/includes/script-contact-section.php';
include 'Dashboard/includes/script-contact-section2.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>IROKO - Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/ibp/logo4.png" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+225) xx xxx xxx
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info.iroko@ibp.com
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a target="_blank" href="http://www.ibp.ibp-holding.com/"><img src="img/ibp/logo5.png" alt="" class="ibp"></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.php">Accueil</a></li>
							<li><a href="about.php">A Propos</a></li>
							<li><a href="contact.php" class="active">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<a href="index.php" class="site-logo">IROKO</a>
		</div>
		<div class="site-breadcrumb">
			<div class="container">
				<a href="index.php"><i class="fa fa-home"></i>Accueil</a>
				<span><i class="fa fa-angle-right"></i>Contact</span>
			</div>
		</div>

	</section>

	<section class="page-section blog-page">
		<div class="container" class="spad">

			<div class="row">
				<?php
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
				$liste = $bdd->query('SELECT * FROM contact_section1 ORDER BY date_time_publication ASC ');
				while ($l = $liste->fetch()) {

				?>
					<div class="col-lg-6 col-md-6 col-sm-6 contact-left">
						<h2 class="section-title">Infos</h2>
						<hr class="trait"><br>
						<p><b>E-mail</b> : <?= $l['email'] ?></p>
						<p><b>Téléphone</b> : <?= $l['contact'] ?></p>
						<p><b>Adresse</b> : <?= $l['adresse'] ?></p>
						<p style="text-align: justify;">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BP
							2425 Abidjan, Côte d'Ivoire</p>
					</div>
				<?php } ?>



				<!-- *********************************************** -->

				<?php
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
				$liste = $bdd->query('SELECT * FROM contact_section2 ORDER BY date_time_publication ASC ');
				while ($l = $liste->fetch()) {

				?>
					<div class="col-lg-6 col-md-6 col-sm-6 contact-right">
						<div class="contact-right">
							<div class="section-title">
								<h2 class="section-title"><?= $l['titre'] ?></h2>
								<hr class="trait">
								<!-- <p><?= $l['sous_titre'] ?></p> -->
							</div>
						<?php
					}
						?>

						<!-- *********************************************** -->
						<form class="contact-form" method="POST">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Votre nom" name="nom">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Votre email" name="mail">
								</div>
								<div class="col-md-12">
									<textarea placeholder="Votre message" name="contenu"></textarea>
									<button type="submit" class="site-btn-cnt" name="ok">
										Envoyer
									</button>
								</div>
							</div>
						</form>
						<p style="color:green" class='text-muted m-b-10'>
							<?php

							if (isset($erreur)) {
								echo $erreur;
							}

							?>
						</p>
						</div>
					</div>
			</div>

			<?php
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
			$liste = $bdd->query('SELECT * FROM contact_section1 ORDER BY date_time_publication ASC ');
			while ($l = $liste->fetch()) {

			?>

				<a target="_blank" href="https://www.google.com/maps/place/IBP+Holding/@5.3576681,-3.9701267,15z/data=!4m2!3m1!1s0x0:0x9e26124bae1ac3ad?sa=X&hl=fr&ved=2ahUKEwiri6Sh47rnAhX76eAKHcEuCgQQ_BIwDXoECAkQBg">
					<img src="Dashboard/miniatures/contact/<?= $l['id'] ?>.jpg" style="width: 100%; height:60%;">
				</a>
			<?php
			}
			?>
		</div>
	</section>
	<!-- page end -->


	<!-- Footer section -->
	<div class="clients-section" id="cleint">
		<div class="container">
			<h3>NOS PARTENAIRES</h3>
			<div class="clients-slider owl-carousel">
				<a href="#cleint">
					<img src="img/partner/chapchap.png" alt="">
				</a>
				<a href="#cleint">
					<img src="img/partner/markgest.png" alt="">
				</a>
				<a href="#cleint">
					<img src="img/partner/tafissa.png" alt="">
				</a>
				<a href="#cleint">
					<img src="img/partner/travel.png" alt="">
				</a>
				<a href="#cleint">
					<img src="img/partner/djeko.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


	<!-- Footer section -->
	<footer class="footer-section set-bg" style="background-color: rgb(8, 6, 41);">
		<!--data-setbg="img/footer-bg.jpg"-->
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-widget">
					<a href="index.php" class="fw-title-a">
						<h5 class="fw-title-a">IROKO</h5>
					</a>
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult elit. Maecenas mamus antesme non anean a
						dolor
						sample tempor nuncest erat.</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
				<?php
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
				$liste = $bdd->query('SELECT * FROM contact_section1 ORDER BY date_time_publication ASC');
				while ($l = $liste->fetch()) {

				?>
					<div class="col-lg-4 col-md-6 footer-widget">
						<div class="contact-widget">
							<h5 class="fw-title">CONTACT</h5>
							<p><i class="fa fa-map-marker"></i><?= $l['adresse'] ?></p>
							<p><i class="fa fa-phone"></i><?= $l['contact'] ?></p>
							<p><i class="fa fa-envelope"></i><?= $l['email'] ?></p>
						</div>
					</div>
				<?php
				}
				?>

				<div class="col-lg-4 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form" method="POST">
							<input type="text" placeholder="Email address" name="letter">
							<button type="submit" name="oknews"><i class="fa fa-send"></i></button>
						</form>
						<p style="color:green" class='text-muted m-b-10'>
							<?php

							if (isset($erreur)) {
								echo $erreur;
							}

							?>
						</p>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="about.php">A Propos</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p>
						Copyright &copy; 2020 IBP-Holding Tout droit reservé. | Conception by
						<a target="_blank" href="http://www.ibp.ibp-holding.com" target="_blank"> ChapChap</a> 2020
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>