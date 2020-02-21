<?php

include 'script-newsletter.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<title>IROKO - Accueil</title>
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
	<link rel="stylesheet" href="css/popup.css" />


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
						<a target="_blank" href="http://www.ibp.ibp-holding.com/"><img src="img/ibp/logo5.png" class="ibp"></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.php" class="active">Accueil</a></li>
							<li><a href="about.php">A Propos</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
			<h2 class="site-logo">PROJET IROKO</h2>
			<p>Search real estate property records, houses, condos, land and more on .<br>Find property info from the most comprehensive source data.</p>
		</div>
	</section>

	<!-- ************************************************************************************************************* -->

	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
	$liste = $bdd->query('SELECT * FROM type1 ORDER BY date_time_publication ASC ');


	?>

	<!-- type1 -->
	<section class="feature-section spad" id="gallery1">
		<div class="container">
			<div class="section-title text-center" id="gallery">
				<h3> Villa de Type 1</h3>
				<h6>Terrain de 452 mètres carrés dont une surface habitable de 308 mètres carrés </h6>
			</div>
			<div class="row">
				<?php

				while ($l = $liste->fetch()) {

				?>
					<div class="col-lg-4 col-md-6">
						<div class="feature-item">
							<div class="feature-pic set-bg" data-setbg="img/feature/<?= $l['id'] ?>.jpg">
							</div>
							<div class="feature-text">
								<div class="text-center feature-title">
									<h5><?= $l['titre'] ?></h5>
									<p> <?= $l['sous_titre'] ?></p>
								</div>
								<div class="room-info-warp">
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-th-large"></i> <?= $l['icon1'] ?></p>
											<p><i class="fa fa-bed"></i><?= $l['icon2'] ?></p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-car"></i><?= $l['icon3'] ?></p>
											<p><i class="fa fa-bath"></i><?= $l['icon4'] ?></p>
										</div>
									</div>
								</div>
								<a href="#<?= $l['id'] ?>" class="room-price">Plus d'infos</a>
							</div>
						</div>
					</div>

					<div id="<?= $l['id'] ?>" class="pop-overlay animate">
						<div class="popup">
							<img src="img/feature/<?= $l['id'] ?>.jpg" alt="Popup Image" class="img-fluid" />
							<p class="mt-4">
								<p> <?= $l['contenu'] ?></p>
							</p>
							<a class="close" href="#gallery">&times;</a>
						</div>

					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>

	<!-- ************************************************************************************************************* -->

	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
	$liste = $bdd->query('SELECT * FROM type2 ORDER BY date_time_publication ASC ');


	?>

	<!-- type2 -->
	<section class="feature-section spad2" id="gallery2">
		<div class="container">
			<div class="section-title text-center">
				<h3> Villa de Type 2</h3>
				<h6>Terrain de 600 mètres carrés dont une surface habitable de 385 mètres carrés </h6>
			</div>
			<div class="row">
				<?php

				while ($l = $liste->fetch()) {

				?>
					<div class="col-lg-4 col-md-6">
						<div class="feature-item">
							<div class="feature-pic set-bg" data-setbg="img/feature/<?= $l['id'] ?>.jpg">
							</div>
							<div class="feature-text">
								<div class="text-center feature-title">
									<h5><?= $l['titre'] ?></h5>
									<p> <?= $l['sous_titre'] ?></p>
								</div>
								<div class="room-info-warp">
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-th-large"></i> <?= $l['icon1'] ?></p>
											<p><i class="fa fa-bed"></i><?= $l['icon2'] ?></p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-car"></i><?= $l['icon3'] ?></p>
											<p><i class="fa fa-bath"></i><?= $l['icon4'] ?></p>
										</div>
									</div>
								</div>
								<a href="#gal" class="room-price">Plus d'infos</a>
							</div>
						</div>
					</div>

					<div id="gal" class="pop-overlay animate">
						<div class="popup">
							<img src="img/feature/<?= $l['id'] ?>.jpg" alt="Popup Image" class="img-fluid" />
							<p class="mt-4">
								<p> <?= $l['contenu'] ?></p>
							</p>
							<a class="close" href="#gallery2">&times;</a>
						</div>

					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>

	<!-- ************************************************************************************************************* -->

	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
	$liste = $bdd->query('SELECT * FROM type3 ORDER BY date_time_publication ASC ');


	?>

	<!-- type3 -->
	<section class="feature-section spad" id="gallery3">
		<div class="container">
			<div class="section-title text-center">
				<h3> Villa de Type 3</h3>
				<h6>Terrain de 600 mètres carrés dont une surface habitable de 385 mètres carrés </h6>
			</div>
			<div class="row">
				<?php

				while ($l = $liste->fetch()) {

				?>
					<div class="col-lg-4 col-md-6">
						<div class="feature-item">
							<div class="feature-pic set-bg" data-setbg="img/feature/<?= $l['id'] ?>.jpg">
							</div>
							<div class="feature-text">
								<div class="text-center feature-title">
									<h5><?= $l['titre'] ?></h5>
									<p> <?= $l['sous_titre'] ?></p>
								</div>
								<div class="room-info-warp">
									<div class="room-info">
										<div class="rf-left">
											<p><i class="fa fa-th-large"></i> <?= $l['icon1'] ?></p>
											<p><i class="fa fa-bed"></i><?= $l['icon2'] ?></p>
										</div>
										<div class="rf-right">
											<p><i class="fa fa-car"></i><?= $l['icon3'] ?></p>
											<p><i class="fa fa-bath"></i><?= $l['icon4'] ?></p>
										</div>
									</div>
								</div>
								<a href="#gal" class="room-price">Plus d'infos</a>
							</div>
						</div>
					</div>

					<div id="gal" class="pop-overlay animate">
						<div class="popup">
							<img src="img/feature/<?= $l['id'] ?>.jpg" alt="Popup Image" class="img-fluid" />
							<p class="mt-4">
								<p> <?= $l['contenu'] ?></p>
							</p>
							<a class="close" href="#gallery3">&times;</a>
						</div>

					</div>
				<?php
				}
				?>
			</div>
		</div>
	</section>

	<!-- feature section end -->
	<!-- ******************************************************************************************** -->

	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
	$liste = $bdd->query('SELECT * FROM services ORDER BY date_time_publication ASC ');

	while ($l = $liste->fetch()) {

	?>

		<!-- Services section -->
		<section class="services-section spad set-bg" data-setbg="Dashboard/img/23.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<img src="Dashboard/miniatures/service/<?= $l['id'] ?>.jpg" alt="">
					</div>
					<div class="col-lg-5 offset-lg-1 pl-lg-0">
						<div class="section-title text-white">
							<h3><?= $l['titre'] ?></h3>
							<p><?= $l['sous_titre'] ?></p>
						</div>
						<div class="services">
							<div class="service-item">
								<i class="fa fa-comments"></i>
								<div class="service-text">
									<h5><?= $l['icon1_titre'] ?></h5>
									<p><?= $l['icon1_contenu'] ?></p>
								</div>
							</div>
							<div class="service-item">
								<i class="fa fa-home"></i>
								<div class="service-text">
									<h5><?= $l['icon2_titre'] ?></h5>
									<p><?= $l['icon2_contenu'] ?></p>
								</div>
							</div>
							<div class="service-item">
								<i class="fa fa-briefcase"></i>
								<div class="service-text">
									<h5><?= $l['icon3_titre'] ?></h5>
									<p><?= $l['icon3_contenu'] ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php
	}
	?>


	<!-- ************************************************************************************************** -->
	<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_iroko', 'root', '');
	$liste = $bdd->query('SELECT * FROM composant ORDER BY date_time_publication ASC ');

	?>
	<section class="properties-section spad" id="gallery4">
		<div class="container">

			<div class="section-title text-center" id="suite">
				<h3>RECENT PROPERTIES</h3>
				<p>Discover how much the latest properties have been sold for</p>
			</div>
			<div class="row">
				<?php

				while ($l = $liste->fetch()) {

				?>
					<div class="col-md-6">

						<div class="propertie-item set-bg" data-setbg="Dashboard/miniatures/composant/<?= $l['id'] ?>.jpg">

							<div class="propertie-info text-white">
								<div class="info-warp">
									<h5><?= $l['titre'] ?></h5>
									<p>

										<?= $l['sous_titre'] ?>
									</p>
								</div>
								<div class="price">
									<a href="#suite">Plus d'infos</a>
								</div>
							</div>
						</div>
					</div>

					<!-- ************************************************************************************************* -->
					<!-- pour faire un popup -->
					<!-- popup-->
					<div id="#" class="pop-overlay animate">
						<div class="popup">
							<img src="Dashboard/miniatures/composant/<?= $l['id'] ?>.jpg" alt="Popup Image" class="img-fluid" />
							<p class="mt-4">
								<?= $l['contenu'] ?>
							</p>
							<a class="close" href="#gallery4">&times;</a>
						</div>
					</div>
				<?php
				}
				?>
			</div>

		</div>
	</section>
	<!-- Properties section end -->

	<!-- Clients section -->
	<div class="clients-section">
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
					<p>Lorem ipsum dolo sit azmet, consecter dipise consult elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
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