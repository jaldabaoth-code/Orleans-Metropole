<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
            include 'include/head.html';
        ?>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<title>Orléans</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg" id="homeNav">
			<?php
                include 'include/nav.php';
            ?>
		</nav>
		<header id="homeHeader" class="d-flex justify-content-center align-items-center flex-column">
			<video muted autoplay loop class="video d-flex col-12">
				<source src="Orléans_-terre-de-rencontres-et-d_émotions.webm" type="video/webm">
				Sorry, your browser doesn't support embedded videos.
			</video>
		</header>
		<section id="index">
			<div class="history pb-3">
				<div class="align-items-center d-flex flex-column my-lg-4">
					<h2 class="text-lg-start text-center col-10 col-lg-8">UNE VILLE HISTORIQUE</h2>
					<hr class="col-10 col-lg-8">
				</div>
				<div class="d-flex justify-content-center align-items-center my-3 flex-column flex-lg-row">
					<img src="/assets/images/JDarc.jpg" class="col-10 col-lg-4 me-lg-4 mb-4">
					<div class="col-10 col-lg-4 d-flex flex-column justify-content-center">
						<h3>45000&nbspans&nbspd'histoire</h3>
						<p>
							Dire qu'Orléans tient une grande place dans l'histoire de France est un pléonasme.
							L'histoire de France est liée à Orléans et ce depuis l'Antiquité.
							Le tournant de l'histoire d'Orléans est également un des tournants de l'histoire de France. En pleine 
							Guerre de Cent Ans, Jeanne d'Arc parvient à vaincre les Anglais et à libérer la ville le 8 mai 1429. Elle 
							devient dès lors l'héroïne de la ville, une admiration qui perdure encore aujourd'hui avec la célébration 
							tous les ans des fêtes johanniques. Après la guerre, la ville retrouve vite sa prospérité notamment grâce 
							à Louis XI qui développe l'agriculture de l'Orléanais. A la Renaissance, Orléans continue de faire partie 
							intégrante de l'histoire de France avec le passage de riches châtelains, de Jean Calvin et du roi lui-même. 
							C'est dans une chambre de l'hôtel Groslot que François II meurt en 1560. Plusieurs fois reconstruite, 
							la dernière version de la cathédrale d'Orléans verra sa première pierre posée par Henri IV lui-même 
							faisant ainsi de cet édifice un des plus beaux de France puisque les travaux s'étalent sur un siècle 
							offrant un mélange de style fin Renaissance-Louis XIV. C'est à l'époque du Roi Soleil que le Dûché 
							d'Orléans est le plus important de France, s'étalant d'Arpajon à Blois.
						</p>
					</div>
				</div>
				<div class="d-flex justify-content-center content-button-history">
					<a href="histoire.php" class="button-history d-flex align-items-center justify-content-center col-10 col-lg-3" role="button">SAVOIR PLUS SUR ORLÉANS</a>
				</div>
			</div>
			<div class="pb-3 tourism my-5">
				<div class="d-flex justify-content-center mb-4">
					<div class="vertical">
					</div>
				</div>
				<h3 class="d-flex justify-content-center">TOURISME</h3>
				<h2 class="justify-content-center d-flex my-5">
					<div class="text-dark">DÉCOUVREZ</div>&nbsp<div class="text-white">ORLÉANS</div>
				</h2>
				<div class="d-flex justify-content-center">
					<p class="text-center col-10 col-lg-8 d-flex">
						Au cœur du Val de Loire, Orléans est idéalement située sur la Loire. La Cité johannique (en référence à Jeanne d'Arc) possède de multiples atouts historiques et patrimoniaux qui en font toute sa renommée. Découvrez le temps d'un weekend son territoire, son fleuve, son histoire, ses monuments et lieux remarquables, musées, parcs et jardins...
					</p>
				</div>
				<div class="d-flex justify-content-center content-button-tourism">
					<a href="tourisme.php" class="button-tourism col-10 col-lg-3 d-flex align-items-center justify-content-center" role="button">SAVOIR PLUS</a>
				</div>
			</div>
			<div class="pb-3 photos">
				<h2 class="justify-content-center d-flex my-5">GALLERIE DE PHOTOS</h2>
				<div class="d-flex justify-content-center"></div>
				<div class="container masonry-galery h-100">
					<div class="photobloc item-1 col-lg-6 mb-4">
						<img src="/assets/images/cathedrale.jpg" alt="cathedrale">
					</div>
					<div class="photobloc item-2 col-lg-6 mb-4">
						<img src="/assets/images/parcfloral.jpg" alt="parcfloral">
					</div>
					<div class="photobloc item-3 col-lg-6 mb-4">
						<img src="/assets/images/frac.jpg" alt="frac">
					</div>
					<div class="photobloc item-4 col-lg-6 mb-4">
						<img src="/assets/images/museebeaux-art.jpg" alt="museebeaux-art">
					</div>
					<div class="photobloc item-5 col-lg-6 mb-4">
						<img src="/assets/images/combleux.jpg" alt="combleux">
					</div>
					<div class="photobloc item-6 col-lg-6 mb-4">
						<img src="/assets/images/statue.jpg" alt="statue">
					</div>	
				</div>
				<div class="d-flex justify-content-center">
					<a href="photos.php" class="button-photos col-10 col-lg-3 d-flex align-items-center justify-content-center" role="button">VOIR LES PHOTOS D'ORLEANS</a>
				</div>
			</div>
			<div class="container">
				<div class="events-carousel my-5">
					<h2 class="text-center text-uppercase my-5 events-carousel-h2">Événements</h2>
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img  src="https://www.orleans-metropole.fr/fileadmin/orleans/MEDIA/diaporama/festival_loire/2019/vendredi/IMG_1983.jpg" class="img-event d-block w-100" alt="festival">
								<div class="carousel-caption d-none d-md-block">
									<h3>LE FESTIVAL DE LOIRE 2021</h3>
									<p>
										Le Festival de Loire posera l’ancre à Orléans du 22 au 26 septembre 2021. Dans sa cale, une édition anniversaire pleine de panache.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="/assets/images/parcfloral.jpg" class="d-block w-100" alt="parcfloral">
								<div class="carousel-caption d-none d-md-block">
									<h3>SALON DES ARTS DU JARDIN</h3>
									<p>
										Au printemps, le Parc Floral de La Source célèbre le jardinage et l’art de vivre au grand air.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="https://www.orleans-metropole.fr/fileadmin/orleans/MEDIA/actualite/jazz-eveche/concert-jazz001.jpg" class="d-block w-100" alt="jazz">
								<div class="carousel-caption d-none d-md-block">
									<h3>JAZZ À L’EVÊCHÉ</h3>
									<p>
										Jazz à l’Évêché, c’est 4 jours de fête en plein cœur d’Orléans où tous les publics se retrouvent autour d’une même ferveur ! Rendez-vous du 19 au 22 juin.
									</p>
								</div>
							</div>
						</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</section>
		<footer>
			<?php
				include 'include/footer.html';
			?>
		</footer>
		<script src="https://kit.fontawesome.com/661d52523c.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
