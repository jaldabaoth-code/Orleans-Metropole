<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
            include 'include/head.html';
        ?>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
		<link rel="icon" href="assets/images/Logo_Orléans_Métropole_blanc.png" />
		<title>Orléans - Tourisme</title>
	</head>
	<body id="tourismeBody">
		<nav class="navbar navbar-expand-lg">
			<?php
                include 'include/nav.php';
            ?>
		</nav>
		<header id="tourismHeader" class="d-flex justify-content-center align-items-center flex-column">
			<img id="tourisme_logo" src="assets/images/logo_tourisme.png" alt="Logo Orléans Tourisme">
		</header>
		<section id="tourisme">
			<p id=tutoMap>Utilisez la carte et cliquez sur les icônes sur la carte pour découvrir les lieux à visiter à Orléans!</p>
			<div id="map"></div>
			<div id="cards">
				<div class="card col-11">
					<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d532202-Reviews-Cathedrale_Ste_Croix-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">
						<div class="card-title text-center">Cathédrale Sainte Croix</div>
						<img src="assets/images/cathedrale.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Comptant parmi les 5 plus vastes cathédrales gothiques de France (140m de long, 53m de large avec une flèche culminant à 106m), Sainte-Croix fut commencée en 1287 et officiellement inaugurée le 8 mai 1829. Elle est chargée d\'une longue histoire : Jeanne d\'Arc y pria, Henri IV lança sa reconstruction en 1601, Louis XIV finança les transepts qui lui rendent hommage en affichant sa devise et son soleil.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d3474784-Reviews-Parc_Floral_de_La_Source-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">
						<div class="card-title text-center">Parc Floral de La Source</div>
						<img src="assets/images/parc_floral.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Situé à la lisière entre le coteau de Sologne et la plaine du Val de Loire, le parc floral de La Source est composé d’espaces où se mêlent les mondes végétal, minéral et animal : jardin d’iris, roseraie, serre aux papillons, petit train… sont autant de lieux qui se renouvellent tout au long de l’année.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.orleans-metropole.fr/tourisme/parcs-et-jardins/jardin-des-plantes" target="_blank">
						<div class="card-title text-center">Jardin des Plantes</div>
						<img src="assets/images/plantes.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								En 1640, sur la rive droite de la Loire, à l'est de l'actuel Pont Joffre, la Société des apothicaires crée un jardin botanique afin d'y cultiver des plantes médicinales. En 1834, le jardin est transféré sur l'emplacement actuel. Il est lieu d'acclimatation des plantes rares, arrivées des contrées exotiques par les bateaux de Loire et site d'études et d'instruction. L'orangerie et les serres chaudes sont construites à cette époque. A la fin du 19ème siècle, la recherche de décors floraux dans un cadre arboré prime sur l'étude scientifique du végétal.Aujourd'hui, le jardin des plantes, s'il demeure un jardin d'agrément, est aussi un lieu d'expérimentation et de découverte du végétal. C'est ici que les jardiniers testent, essaient, observent et éprouvent les végétaux et les techniques de fleurissement et d'ntretien plus respectueuses de notre environnement. Il est un des outils du Développement Durable et prolonge au 21ème siècle les missions entamées au 17ème.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.tourisme-orleansmetropole.com/activites-loisirs/musee-des-beaux-arts" target="_blank">
						<div class="card-title text-center">Musée des Beaux Arts</div>
						<img src="assets/images/beaux-arts.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Peintures, dessins, estampes, sculptures, objets d'art… Quelle que soit votre sensibilité artistique, vous serez forcément séduit. À l'entresol par exemple : les collections du XIXe dressent un panorama représentatif, du néoclassicisme au romantisme et de l’académisme au réalisme. Au 1er étage, place à la peinture française du XVIIe au XVIIIe que l'on découvre à travers les collections Richelieu, la religion, la mythologie, l'histoire, une étonnante galerie de portraits, des bustes d’Houdon et de Pigalle.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.orleans-metropole.fr/culture/musees-expositions/hotel-cabu-musee-dhistoire-et-darcheologie" target="_blank">
						<div class="card-title text-center">Musée d'Histoire et d'Archéologie</div>
						<img src="assets/images/histoire.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Installé dans l'hôtel Cabu, l'un des plus beaux monuments Renaissance de la ville, le musée abrite le trésor de Neuvy-en-Sullias, un ensemble exceptionnel de bronzes gaulois et gallo-romains.Il présente également des objets et des oeuvres évoquant l'histoire de Jeanne d'Arc et celle d'Orléans à travers les enseignes, les productions d'autrefois (images populaires,dinanderie, porcelaines) et les anciennes activités industrielles, avec une salle consacrée à la marine de Loire.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.orleans-metropole.fr/culture/musees-expositions/museum-dorleans-pour-la-biodiversite-et-lenvironnement" target="_blank">
						<div class="card-title text-center">Museum d'Orléans pour la Biodiversité et l'Environnement</div>
						<img src="assets/images/MOBE.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Le Muséum d’Orléans pour la Biodiversité et l’Environnement (MOBE) est un musée de culture scientifique. Avec ses 5 niveaux et 1200 spécimens et échantillons exposés (sur 435000), le MOBE propose une découverte du monde qui nous entoure.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="http://www.orleansmetropolis.com/etablissement/75-frac-centre" target="_blank">
						<div class="card-title text-center">Fond Régional d'Art Contemporain</div>
						<img src="assets/images/frac.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Le Fonds régional d'art contemporain de la région Centre-Val de Loire est une collection publique d'art contemporain. Son espace d'exposition est situé à Orléans. Toutefois, comme pour tout FRAC, la plupart des oeuvres sont prêtées dans différentes structures de la région, de France et même du monde.Le fonds du FRAC Centre est spécialisé en art contemporain et tout particulièrement l'architecture expérimentale, de 1950 à nos jours. 800 maquettes et 14000 dessins composent la vaste collection du FRAC.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.orleans-metropole.fr/sport/etablissements-et-lieux-de-pratique/lo-centre-aqualudique" target="_blank">
						<div class="card-title text-center">L'O - centre aqualudique</div>
						<img src="assets/images/LO.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Ce nouvel espace de baignade, qui bénéficie d’une situation idéale en plein cœur de ville, conjugue le bien-être et le jeu. Le centre aqualudique a été pensé pour accueillir les publics les plus divers. Il comprend trois pôles thématiques : la halle ludique, l’espace bien-être – détente et le bassin sportif.
							</p>
						</div>
					</a>
				</div>
				<div class="card col-11">
					<a href="https://www.orleans-metropole.fr/sport/etablissements-et-lieux-de-pratique/la-base-de-loisirs-de-lile-charlemagne" target="_blank">
						<div class="card-title text-center">La base de loisirs de l'Ile Charlemagne</div>
						<img src="assets/images/charlemagne.jpg" class="card-img-top" alt="image lieu">
						<div class="card-body">
							<p class="card-text">
								Cette aire de loisirs de 70ha est organisée autour d'un plan d'eau en bord de Loire. Son accès est libre et gratuit.<br>C'est un espace privilégié pour se détendre, faire du vélo, du jogging, pratiquer bon nombre d'activités nautiques. Le site comprend une vaste plaine de jeux pour les enfants et de nombreux terrains d'activité spécialisés : beach volley, basket, handball, minifootball, baseball, volley ball, ping pong, pétanque, paintball (3 terrains), accrobranche (un parc de 8 parcours) et aqua-parc. La ligue du Centre de triathlon propose de l'initiation gratuite (06 08 02 89 50).<br>Sur le plan d'eau, initiation à la planche à voile, au dériveur, au catamaran ou au canoë kayak, dans le cadre de clubs. On peut également louer des canoës auprès du CKCO(02 38 66 14 80) ou apporter sa propre planche à voile. De mai à septembre, la baignade est autorisée dans une zone surveillée. A proximité, une aire particulièrement ventée permet de pratiquer le cerf-volant.<br>Enfin, toute l'année, de nombreux clubs y organisent des rencontres et animations sportives.
							</p>
						</div>
					</a>
				</div>
			</div>
		</section>
		<footer>
			<?php
				include 'include/footer.html';
			?>
		</footer>
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
		<script type="text/javascript" src="assets/sources/js/map.js"></script>
		<script src="https://kit.fontawesome.com/661d52523c.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
