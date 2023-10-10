<?php include "app/app.php";
$page = 1;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>
    <?php
    require_once 'api/whmcs/connect.php';
    $productAll = product();
    //var_dump($_SESSION);
    ?>

    <main>
        <div class="accueil">

            <div id="header">
            <button class="custom-btn btn-1">Show Now</button>
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
            <div class="row d-flex justify-content-center" id="sectionNettoyage">
                <!-- <h3 class="text-center my-5">Nettoyage de vos sneakers</h3> -->
                <div class="col-6 nettoyage">
                </div>

                <!-- FORMULES DE NETTOAYGE  -->
                <div class="col-5 d-flex flex-column justify-content-center">
                    <h4 class="text-center mt-5">La deuxième vie de vos sneakers</h4>
                    <p class="my-5 w-75 mx-auto">Nos services de nettoyage de baskets sont conçus pour répondre aux besoins de tous les amateurs de sneakers.
                        Nous utilisons des techniques de nettoyage avancées et des produits de haute qualité pour éliminer la saleté,
                        les taches et les odeurs de vos baskets, tout en préservant leur couleur et leur texture d'origine.</p>
                    <div class="d-flex justify-content-center mx-auto">
                    <button class="custom-btn btn-2">Formules</button>
                    </div>
                </div>
                <!-- / FORMULE DE NETTOYAGE -->
            </div>
        </article>
        <!-- / NETTOYAGE -->

        <?php socialLink($page); ?>

    </main>


    <footer> <?php footer($page); ?> </footer>

</body>

</html>