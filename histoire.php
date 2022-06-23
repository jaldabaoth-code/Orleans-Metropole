<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
            include 'include/head.html';
        ?>
        <title>Orléans</title>
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
                <?php
                    include 'include/nav.php';
                ?>
            </nav>
            <section>
                <div class="histoire-banner">
                    <h2 class="display-3 text-uppercase p-3">Histoire</h2>
                </div>
                <iframe class="my-5" src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1YgcekHqg-xKJlLOdX0TD9WZqnRov_8Q5YH6JxsGcDj0&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>
            </section>
        </main>
        <footer>
            <?php
				include 'include/footer.html';
			?>
        </footer>
        <script src="https://kit.fontawesome.com/661d52523c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
