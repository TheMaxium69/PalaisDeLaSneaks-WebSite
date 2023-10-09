<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>
<?php require_once 'api/whmcs/connect.php'; $productAll = product(); ?>

    <main>
        <div class="accueil">

            <div id="header">
                <a href="products" class="btn btn-dark btn-lg">Shop now</a>
            </div>
        </div>

        <section id="gallery">


            <h3 class="text-center title">Nouveauté</h3>

            <div class="row justify-content-around px-5">


                <?php

                $products = $productAll['product'];
                for ($i = 0; $i <= 9; $i++) {
                    ?>

                    <div class="card" style="width: 18rem;">
                        <h3 class="p-4 text-center"><?= $products[$i]['name'] ?></h3>
                        <p class="card-text text-center">MEN'S TRAINING SHOES</p>
                        <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">€ 130</p>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </section>

        <!-- NETTOYAGE -->
        <article>
            <div class="row d-flex justify-content-center mt-5">
                <h3 class="text-center my-5">On vous propose</h3>
                <div class="col-6 nettoyage">
                </div>
                
                <!-- FORMULES DE NETTOAYGE  -->
                <div class="col-5">
                    <h3 class="text-center mt-5">Nettoyage de vos sneakers</h3>
                    <p class="text-center mt-3">Découvez nos formule pour vos sneakers :</p>
                    <div class="list-group w-75 mx-auto">
                        <a href="#" class="list-group-item list-group-item-action item-nettoyage" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Clean Prenium</h5>
                            </div>
                            <small>And some small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Clean Medium</h5>
                            </div>
                            <small class="text-muted">And some muted small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Clean Standard</h5>
                            </div>
                            <small class="text-muted">And some muted small print.</small>
                        </a>
                    </div>
                </div>
                <!-- / FORMULE DE NETTOYAGE -->
            </div>
        </article>
        <!-- / NETTOYAGE -->

        <!-- RESEAUX SOCIAUX -->
        <div class="row d-flex justify-content-center">
            <h3 class="text-center my-5">Suivez nous ! </h3>
            <div class="card col-4">
                    <div class="card-body">
                        <h3>
                            <a class="navbar-brand" href="#">
                            <i class="fa-brands fa-instagram"></i>
                            Instagram
                            </a>
                        </h3>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary">Suivre</a>
                    </div>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <h3>
                        <a class="navbar-brand" href="#">
                        <i class="fa-brands fa-instagram"></i>
                        TikTok
                        </a>
                    </h3>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary">Suivre</a>
                    </div>
                </div>
            </div>
            <!-- Facebook -->
            <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>

            <!-- Twitter -->
            <i class="fab fa-twitter fa-2x" style="color: #55acee;"></i>

            <!-- Google -->
            <i class="fab fa-google fa-2x" style="color: #dd4b39;"></i>

            <!-- Instagram -->
            <i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i>


            <!-- Whatsapp -->
            <i class="fab fa-whatsapp fa-2x" style="color: #25d366;"></i>
        </div>
        <!-- / RESEAUX SOCIAUX -->

    </main>

    
    <footer> <?php footer($page); ?> </footer>

</body>

</html>