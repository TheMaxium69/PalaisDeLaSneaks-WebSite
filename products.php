<?php include "app/app.php";
$page = 2;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <?php
    require_once 'panel/init.php';
    require_once 'api/whmcs/connect.php';
    require_once 'api/more/get.php';


    $productAll = product();

    $productMax = 40;
    $productMin = 40;

    foreach ($productAll['product'] as $product) {

        if ($productMax < $product['pricing']['EUR']['monthly']) {
            $productMax = $product['pricing']['EUR']['monthly'];
        }
    }

    ?>


    <?php if (!empty($_GET['p'])) {

        $id = $_GET['p'];

        productOne($id);
    } else { ?>

        <main>
            <h1 class="text-center mt-5">Trouvez votre paire préférée</h1>
            <!-- FILTRE SEARCH -->
            <div class="container w-100" id="search">
                <div class="cover">
                    <form class="flex-form">
                        <label for="from">
                            <i class="ion-location"></i>
                        </label>
                        <input id="searchInput" type="search" placeholder="Recherchez une marque, un produit..">
                    </form>
                </div>
            </div>
            <!-- FILTRE SEARCH -->

            <div class="row">
                <div class="col-3" id="filter">
                    <h3 class="text-center mb-5">Filtrer par : </h3>
                    <div class="">
                        <select class="form-select w-75 mx-auto" aria-label="Default select example">
                            <option selected>Taille</option>
                            <option value="1">37</option>
                            <option value="2">38</option>
                            <option value="3">39</option>
                            <option value="4">40</option>
                            <option value="5">41</option>
                            <option value="6">42</option>
                            <option value="7">43</option>
                            <option value="8">44</option>
                            <option value="9">45</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <select class="form-select w-75 mx-auto" aria-label="Default select example">
                            <option selected>Marque</option>
                            <option value="1">Nike</option>
                            <option value="2">Adidas</option>
                            <option value="3">Yeezy</option>
                            <option value="4">Jordan</option>
                        </select>
                    </div>

                    <!-- FILTRE PRICE -->
                    <p class="mt-4 text-center">Prix : </p>
                    <div class="wrapper" id="filterPrice">
                        <fieldset class="filter-price">

                            <div class="price-field">
                                <input type="range" min="<?= $productMin ?>" max="<?= $productMax ?>" value="<?= $productMin ?>" id="lower">
                                <input type="range" min="<?= $productMin ?>" max="<?= $productMax ?>" value="<?= $productMax ?>" id="upper">
                            </div>
                            <div class="price-wrap">

                                <div class="price-container">
                                    <div class="price-wrap-1">

                                        <input id="one">
                                        <label for="one">€</label>
                                    </div>
                                    <div class="price-wrap_line">-</div>
                                    <div class="price-wrap-2">
                                        <input id="two">
                                        <label for="two">€</label>

                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <!-- / FILTRE PRICE -->
                </div>

                <div class="container col-9" id="cardProductAll">
                    <div class="row justify-content-around px-5" id="tableTEST">
                        <?php foreach ($productAll['product'] as $product) {
                            $productPicture = getPicture($product['pid']);

                            if ($productMax < $product['pricing']['EUR']['monthly']) {
                                $productMax = $product['pricing']['EUR']['monthly'];
                            }

                            if ($product['pricing']['EUR']['monthly'] < 40) {
                            } else {

                        ?>
                                <div class="card card__one" style="width: 18rem;" onclick="window.location.href = '?p=<?= $product['pid'] ?>';">
                                    <h3 class="p-4 text-center"><?= $product['name'] ?></h3>
                                    <p class="card-text text-center text-danger">Nike</p> <!--                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="Card image cap">-->
                                    <div class="cardSneaker" style="height: 200px; background-image: url('api/more/uploads/<?= $productPicture['picture1'] ?>')">

                                    </div>
                                    <!-- <img class="card-img-top" src="api/more/uploads/<?= $productPicture['picture1'] ?>" alt="Card image cap"> -->
                                    <div class="card-body">
                                        <p class="card-text text-center text-dark"><?= $product['pricing']['EUR']['monthly'] ?> €</p>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>


        </main>

        <script src="javascript/filtre.js"></script>

    <?php } ?>
    <footer> <?php footer($page); ?> </footer>
</body>

</html>