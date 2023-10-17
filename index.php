<?php include "app/app.php";
$page = 1;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>
    <?php

    require_once 'api/whmcs/connect.php';
    require_once 'api/more/get.php';
    $productAll = product();
    //var_dump($_SESSION);
    ?>

    <main>
    <div id="header">
        <div class="btnHeader">
            <button type="button" class="btn">D E C O U V R I R</button>
        </div>
    </div>
  </div>

  <section id="gallery">
            <h3 class="text-center title">N O U V E A U T E S</h3>

            <div class="row justify-content-center px-5">


                <?php

                $products = $productAll['product'];
                for ($i = 0; $i <= 7; $i++) {

                    $product = null;
                    $product = $products[$i];

                    $productPicture = getPicture($product['pid']);

                    $productGroupName = getGroupByGid($product['gid']);
                ?>

                    <div class="card card__one" onclick="window.location.href = 'products.php?p=<?= $product['pid'] ?>';">
                        <div class="product-image">
<!--                             <img class="card-img-top" src="api/more/uploads/--><?php //= $productPicture['picture1'] ?><!--" alt="Card image cap">-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="nameSneakers"><?= $product['name'] ?></h2>
                            <h6 class="nameMarque"><?= $productGroupName ?></h6>
                            <div class="price"><?= $product['pricing']['EUR']['monthly'] ?> €</div>
                        </div>
                    </div>

                <?php } ?>

            </div>

            <div class="btnSectionGalery d-flex justify-content-center mx-auto">
                <button class="custom-btn btn-2" style="text-transform: uppercase">Voir plus</button>
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
                    <h3 class="text-center" style="margin-top: 2rem!important">La deuxième vie de vos sneakers</h3>
                    <p class="w-58 mx-auto" style="margin-top: 2rem!important;">Nos services de nettoyage de baskets sont conçus pour répondre aux besoins de tous les amateurs de sneakers.
                    </p>
                    <p class="mx-auto w-58">Nous utilisons des techniques de nettoyage avancées et des produits de haute qualité pour éliminer la saleté,
                    les taches et les odeurs de vos baskets, tout en préservant leur couleur et leur texture d'origine.</p>
                    <div class="d-flex justify-content-center mx-auto">
                        <button class="custom-btn btn-2">Découvrir nos formules</button>
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