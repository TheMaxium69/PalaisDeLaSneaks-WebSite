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
        <div id="header">
            <button type="button" class="btn">D E C O U V R I R</button>
        </div>

        <section id="gallery">
            <h3 class="text-center title">N O U V E A U T E</h3>

            <div class="row justify-content-center px-5">


                <?php

                $products = $productAll['product'];
                for ($i = 0; $i <= 9; $i++) {
                ?>

                    <div class="card" style="width: 18rem;" onclick="window.location.href = 'products.php?p=<?= $products[$i]['pid'] ?>';">
                        <h3 class="p-4 text-center"><?= $products[$i]['name'] ?></h3>
                        <p class="card-text text-center text-danger">Nike</p>
                        <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center bold">130 €</p>
                        </div>
                    </div>

                <?php } ?>

            </div>

            <div class="frame">
                <button class="custom-btn btn-7"><span>Read More</span>   </button>
            </div>

        </section>

        <!-- NETTOYAGE -->
        <article>
            <div class="row d-flex justify-content-center" id="sectionNettoyage">
                <!-- <h3 class="text-center my-5">Nettoyage de vos sneakers</h3> -->
                <div class="col-5 picture">
                </div>

                <!-- FORMULES DE NETTOAYGE  -->
                <div class="col-6 d-flex flex-column justify-content-center text-center">
                    <h3 class="text-center mt-5">La deuxième vie de vos sneakers</h3>
                    <p class="mt-5 w-50 mx-auto">Nos services de nettoyage de baskets sont conçus pour répondre aux besoins de tous les amateurs de sneakers.
                    </p>
                    <p class="w-50 mx-auto">Nous utilisons des techniques de nettoyage avancées et des produits de haute qualité pour éliminer la saleté,
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