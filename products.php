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

    $productGroupAll = productGroup();

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
            <h1 class="text-center mt-5" id="title">Trouvez votre paire préférée</h1>
            <!-- FILTRE SEARCH -->
            <div class="container w-100" id="search">
                <div class="cover">
                    <form class="flex-form">
                        <label for="from">
                            <i class="ion-location"></i>
                        </label>
                        <input class="w-100 pe-4" id="searchInput" type="search" placeholder="Recherchez un produit ...">
                    </form>
                </div>
            </div>
            <!-- FILTRE SEARCH -->
            
            <div class="row">
                <div class="col-3" id="filter">
                    <h3 class="text-center mb-5">Filtrer par : </h3>
                    <div class="w-100">
                        <!-- FILTRE PRICE -->
                        <p class="mt-4 text-center">Prix : </p>
                        <div class="wrapper" id="filterPrice">
                            <fieldset class="filter-price">
            
                                <div class="price-field">
                                    <input oninput="showValMin(this.value)" onchange="showValMin(this.value)" type="range" min="<?= $productMin ?>" max="<?= $productMax ?>" value="<?= $productMin ?>" id="lower">
                                    <input oninput="showValMax(this.value)" onchange="showValMax(this.value)" type="range" min="<?= $productMin ?>" max="<?= $productMax ?>" value="<?= $productMax ?>" id="upper">
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

                    <!-- FILTRE MARQUE -->
                    <div class="dropdown" data-control="checkbox-dropdown">
                        <label class="dropdown-label">Choix des marques</label>
                        
                        <div class="dropdown-list">
                            <a href="#" data-toggle="check-all" class="dropdown-option">
                            Check All  
                            </a>
                            
                            <label class="dropdown-option">
                            <input type="checkbox" name="dropdown-group" value="adidas" />
                            Adidas
                            </label>
                            
                            <label class="dropdown-option">
                            <input type="checkbox" name="dropdown-group" value="nike" />
                            Nike
                            </label>
                            
                            <label class="dropdown-option">
                            <input type="checkbox" name="dropdown-group" value="jordan" />
                            Jordan
                            </label>
                            
                            <label class="dropdown-option">
                            <input type="checkbox" name="dropdown-group" value="yeezy" />
                            Yeezy
                            </label>
                                
                        </div>
                    </div>
                    <!-- / FILTRE MARQUE -->

                    <!-- <div class="mt-2 w-100">
                        <select onchange="selectGroup(this.value)" class="form-select w-75 mx-auto" aria-label="Default select example">
                            <option value="0" selected>Marque</option>
                            <?php foreach ($productGroupAll as $productGroup) {

                            ?>
                                <option value="<?= $productGroup['id'] ?>"><?= $productGroup['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div> -->

                </div>

                <!-- CARD -->
                <div class="col-9" id="cardProductAll">
                    <div class="row justify-content-center" id="tableTEST">
                        <?php foreach ($productAll['product'] as $product) {
                            $productPicture = getPicture($product['pid']);

                            if ($product['pricing']['EUR']['monthly'] < 40) {
                            } else {
                        ?>
                    <div <?php if ( $product['paytype'] !== 'onetime'){ echo "style='display: none;'"; } ?>  class="card card__one" onclick="window.location.href = '?p=<?= $product['pid'] ?>';">
                        <div class="product-image">
                            <!-- <img src="app/assets/sneakersLV.png" alt="OFF-white Red Edition" draggable="false" /> -->
                            <!-- <img class="card-img-top" src="api/more/uploads/<?= $productPicture['picture1'] ?>" alt="Card image cap"> -->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="">
                        </div>
                        <div class="product-info">
                            <h2 class="nameSneakers"><?= $product['name'] ?></h2>
                            <h6 class="nameMarque">Nike</h6>
                            <div class="price"><?= $product['pricing']['EUR']['monthly'] ?> €</div>
                        </div>
                    </div>
                    <?php
                             }
                        } ?>
                    </div>
                </div>
                </section>
                <!-- / CARD -->
            </div>


        </main>

        <script src="javascript/filtre.js"></script>

    <?php } ?>
    <footer> <?php footer($page); ?> </footer>
</body>

</html>