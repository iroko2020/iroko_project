<?php

include 'script-newsletter.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>IROKO - A Propos</title>
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
					<div class="col-lg-6 text-lg-left header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+225) xx xxx xxx
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info.iroko@ibp-holding.com
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
							<li><a href="about.php" class="active">A Propos</a></li>
							<li><a href="contact.php">Contact</a></li>
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
				<span><i class="fa fa-angle-right"></i>About</span>
			</div>
		</div>

	</section>
	<!--  Page top end -->

	<!-- page -->
	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
	$liste = $bdd->query('SELECT * FROM about_section1 ORDER BY date_time_publication ASC ');
	?>

	<section class="page-about">
		<div class="container">
			<?php

			while ($l = $liste->fetch()) {

			?>

				<img src="Dashboard/miniatures/about/<?= $l['id'] ?>.jpg" class="spad">
				<div class="row about-text">
					<div class="col-xl-6 about-text-left">
						<h5><?= $l['titre1'] ?></h5>
						<p><?= $l['cont1'] ?></p>
						<p><?= $l['cont1_1'] ?></p>
					</div>
					<div class="col-xl-6 about-text-right">
						<h5><?= $l['titre2'] ?></h5>
						<p><?= $l['cont2'] ?></p>
						<ul class="about-list">
							<li><i class="fa fa-check-circle-o"></i><?= $l['cont2_1'] ?></li>
							<li><i class="fa fa-check-circle-o"></i><?= $l['cont2_2'] ?></li>
							<li><i class="fa fa-check-circle-o"></i><?= $l['cont2_3'] ?></li>
							<li><i class="fa fa-check-circle-o"></i><?= $l['cont2_4'] ?></li>
						</ul>
					</div>
				</div>
			<?php
			}
			?>

		</div>

		<!-- Team section -->
		<?php
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
		$liste = $bdd->query('SELECT * FROM about_section2 ORDER BY date_time_publication ASC ');


		?>
		<section class="team-section spad2 pb-0">
			<div class="container">


				<div class="section-title text-center">
					<h3>OUR AGENTS</h3>
					<p>Our directory of real estate agents who can help you</p>
				</div>
				<div class="row">
					<?php

					while ($l = $liste->fetch()) {

					?>
						<div class="col-lg-3 col-md-6">
							<div class="team-member">
								<div class="member-pic">
									<img src="Dashboard/miniatures/about/<?= $l['id'] ?>.jpg" alt="#">
									<div class="member-social">
										<a href=""><i class="fa fa-facebook"></i></a>
										<a href=""><i class="fa fa-instagram"></i></a>
										<a href=""><i class="fa fa-twitter"></i></a>
									</div>
								</div>
								<div class="member-info">
									<h5><?= $l['nom'] ?></h5>
									<span><?= $l['poste'] ?></span>
									<div class="member-contact">
										<p><i class="fa fa-phone"></i><?= $l['contact'] ?></p>
										<p><i class="fa fa-envelope"></i><?= $l['email'] ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</section>
		<!-- page end -->


		<!-- Clients section -->
		<div class="clients-section" style="margin-top: 15vh;">
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
						<p>Lorem ipsum dolo sit azmet, consecter dipise consult elit. Maecenas mamus antesme non anean a dolor
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
					<?php } ?>

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