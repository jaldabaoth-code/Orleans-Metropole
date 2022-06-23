<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'include/head.html';
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Orléans galerie photos</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <?php
                include 'include/nav.php';
            ?>
        </nav>
        <!--Image header page Galerie -->
        <div class="container-fluid p-5 galerie-banner position-relative">
            <div class="contain-banner pt-3 pb-3 px-2 position-absolute top-50 start-50 translate-middle d-block">
                <h1 class="text-light text-center">GALERIE</h1>
                <p class="text-light fst-italic fs-3 text-center d-md-block d-none">
                    Découvrir les plus beaux sites à Orléans en photos !
                </p>
            </div>
        </div>
        <!--SECTION GALERY PHOTOS starts here-->
        <section class="galerie col-md-11 col-xl-10 mx-auto">
            <!--carousel photos by slick starts here -->
            <div class="slider-for" id="slideshow">
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">La Cathédrale Sainte-Croix</h2>
                    <img src="/assets/images/catherale.jpg" class="d-block mw-100 img-fluid mx-auto" draggable="false" alt="orleans catherale">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        L'imposante cathédrale Sainte-Croix fut construite par Henri IV, sur les ruines des cathédrales précédentes.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Les bords de Loire</h2>
                    <img src="https://www.vivre-orleans.fr/wp-content/uploads/2018/10/place-de-Loire-Orle%CC%81ans.jpg" class="img-fluid mx-auto" alt="orleans bord de loire" draggable="false">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        Si vous aimez vous promener au bord de l'eau, rejoignez les bords de Loire. Vous pourrez faire une balade à pied ou à vélo.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Le Parc floral de La Source</h2>
                    <img src="/assets/images/parcfloral.jpg" class="img-fluid mx-auto" alt="orleans parc floral" draggable="false"> 
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        Le Parc Floral de La Source est labellisé « Jardin remarquable » pour ses 950 variétés d’iris classées « Collection nationale » mais aussi pour sa roseraie et son potager.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Le FRAC Centre Val de Loire</h2>
                    <img src="/assets/images/frac.jpg" class="img-fluid mx-auto" alt="orleans frac" draggable="false">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        Le Frac Centre-Val de Loire est une collection publique d'art contemporain dont l'espace d'exposition est situé à Orléans.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Statue équestre de Jeanne d'Arc</h2>
                    <img src="/assets/images/statue-jean.JPG" class="img-fluid mx-auto" alt="orleans statue jean d'arc" draggable="false">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        La statue équestre de Jeanne d'Arc, place du Martroi à Orléans est une œuvre de Denis Foyatier datant de 1855.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Le Musée des Beaux-Arts</h2>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Orl%C3%A9ans_mus%C3%A9e_des_Beaux-Arts_2.jpg" class="img-fluid mx-auto " alt="orleans musée beaux arts" draggable="false">
                    <p class="d-blockmw-100 mx-auto text-center border border-3 rounded text-secondary">
                        Avec pas moins de 700 œuvres italiennes, flamandes, hollandaises, françaises exposées en permanence, le Musée des Beaux-Arts possède l'une des plus riches collections publiques de France.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Le place de Matroi</h2>
                    <img src="/assets/images/placematroi.jpg" class="img-fluid mx-auto" alt="orleans place matroi" draggable="false">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        La place du Martroi est la principale place du centre-ville d'Orléans située dans le département du Loiret en région Centre-Val de Loire. Sur la place se dresse la statue équestre de Jeanne d'Arc.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Gare d'Orléans</h2>
                    <img src="/assets/images/gare.jpg" class="img-fluid mx-auto" alt="orleans gare d'orléans" draggable="false">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        La gare d'Orléans est une gare ferroviaire française située sur le territoire de la commune d'Orléans, dans le département du Loiret, en région Centre-Val de Loire.
                    </p>
                </div>
                <div class="item container-fluid mx-auto">
                    <h2 class="text-center mb-4">Le spectale son et lumière</h2>
                    <img src="/assets/images/lightshow.jpg" class="img-fluid mx-auto" alt="orleans spectale lumière" draggable="false">
                    <p class="d-block mw-100 mx-auto text-center border border-3 rounded text-secondary">
                        Durant tout l’été, venez assister au spectacle son & lumière sur la cathédrale Sainte-Croix d’Orléans !
                    </p>
                </div>
            </div>
            <!--slide photos by slick starts here -->
            <div class="slider-nav">
                <div class="item-nav">
                    <img src="/assets/images/catherale.jpg" class="container-fluid mx-auto" alt="orleans republique">
                </div>
                <div class="item-nav">
                    <img src="https://www.vivre-orleans.fr/wp-content/uploads/2018/10/place-de-Loire-Orle%CC%81ans.jpg" class="img-fluid mx-auto" alt="orleans bord de loire" draggable="false">
                </div>
                <div class="item-nav">
                    <img src="/assets/images/parcfloral.jpg" class="img-fluid mx-auto" alt="orleans parc floral" draggable="false"> 
                </div>
                <div class="item-nav">
                    <img src="/assets/images/frac.jpg" class="img-fluid mx-auto" alt="orleans frac" draggable="false">
                </div>
                <div class="item-nav">
                    <img src="/assets/images/statue-jean.JPG" class="img-fluid mx-auto" alt="orleans statue jean d'arc" draggable="false">
                </div>
                <div class="item-nav">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Orl%C3%A9ans_mus%C3%A9e_des_Beaux-Arts_2.jpg" class="img-fluid mx-auto" alt="orleans musée beaux arts" draggable="false">
                </div>
                <div class="item-nav">
                    <img src="/assets/images/placematroi.jpg" class="img-fluid mx-auto" alt="orleans place matroi" draggable="false">
                </div>
                <div class="item-nav">
                    <img src="/assets/images/gare.jpg" class="img-fluid mx-auto" alt="orleans gare d'orléans" draggable="false">
                </div>
                <div class="item-nav">
                    <img src="/assets/images/lightshow.jpg" class="img-fluid mx-auto" alt="orleans spectale lumière" draggable="false">
                </div>
            </div>
        </section>
        <!--SECTION GALERY PHOTOS ends here-->
        <footer>
            <?php
				include 'include/footer.html';
			?>
        </footer>
        <script src="https://kit.fontawesome.com/661d52523c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Links of scripts for slick -->	
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="assets/sources/js/slick.js"></script>
    </body>
</html>
