<?php

function active($currentPath) {
	$urlArray =  explode('/', $_SERVER['REQUEST_URI']);
	$url = end($urlArray);  
	if ($url == '') {
		$url = 'index.php'; // when we are at main page
	}
	if($currentPath == $url) {
		echo 'active'; // class name in css 
	} 
}
?>
<div class="container-fluid">
	<a class="navbar-brand" href="index.php"><img src="assets/images/Logo_Orl%C3%A9ans_M%C3%A9tropole_blanc.png" alt="logo Orléans blanc"></a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link <?php active('index.php'); ?>" aria-current="page" href="index.php">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php active('histoire.php'); ?>" href="histoire.php">Histoire</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php active('tourisme.php'); ?>" href="tourisme.php">Tourisme</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php active('galerie.php'); ?>" href="galerie.php">Galerie</a>
			</li>
		</ul>
	</div>
</div>
