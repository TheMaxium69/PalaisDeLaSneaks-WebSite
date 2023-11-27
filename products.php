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
    $sizeList = [];

    $productMax = 40;
    $productMin = 40;

    foreach ($productAll['product'] as $product) {
        $sizeLisible = substr(getSize($product['pid'])['size'], 2, -2);
        $sizeListProd = explode('", "', $sizeLisible);
        foreach ($sizeListProd as $size) {
            if (!in_array($size, $sizeList)) {
                array_push($sizeList, $size);
            }
        }

        if ($productMax < $product['pricing']['EUR']['monthly']) {
            $productMax = $product['pricing']['EUR']['monthly'];
        }
    }
    sort($sizeList);


    $productMax = intval($productMax + 10);

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
                        <div id="btn-filter" onclick="activeFilter()"><i class="fas fa-sliders-h"></i></div>
                    </form>
                </div>
            </div>
            <!-- FILTRE SEARCH -->
            <div>
                <div id="filter" style="display: none" data-display="0">
                    <div class="allFilter">
                        <select class="form-select size" aria-label="Default select example">
                            <option selected>Taille</option>
                            <?php
                            foreach ($sizeList as $size) {
                                echo "<option value='$size'>$size</option>";
                            }
                            ?>
                        </select>
                        <!-- FILTRE PRICE -->
                        <div class="filtrePrix">
                            <div class="wrapperPrice">
                                <div class="price-inputPrice">
                                    <div class="fieldPrice">
                                        <input type="number" class="input-min" value="0">
                                    </div>
                                    <div class="fieldPrice">
                                        <input type="number" class="input-max" value="<?= $productMax ?>">
                                    </div>
                                </div>
                                <div class="sliderPrice">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-inputPrice">
                                    <input type="range" class="range-min" min="0" max="<?= $productMax ?>" value="0" step="10">
                                    <input type="range" class="range-max" min="0" max="<?= $productMax ?>" value="<?= $productMax ?>" step="10">
                                </div>
                            </div>
                        </div>
                        <!-- / FILTRE PRICE -->



                        <!-- FILTRE MARQUE -->
                        <div class="dropdown" data-control="checkbox-dropdown">
                            <label class="dropdown-label">Choix des marques</label>

                            <div class="dropdown-list">
                                <a href="#" data-toggle="check-all" class="dropdown-option">
                                    Check All
                                </a>

                                <?php foreach ($productGroupAll as $productGroup) { ?>
                                    <label class="dropdown-option">
                                        <input type="checkbox" name="dropdown-group" value="<?= $productGroup['name'] ?>" />
                                        <?= $productGroup['name'] ?>
                                    </label>
                                <?php } ?>

                            </div>
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
                <div id="cardProductAll" style="border-top-left-radius: 10px; border-top-right-radius: 10px; background: #F8F9FA; box-shadow: -2px 1px 23px -8px rgb(32, 32, 32);">
                    <div class="row justify-content-center" id="tableTEST" style="margin-bottom: 60px;">
                        <?php foreach ($productAll['product'] as $product) {
                            $productPicture = getPicture($product['pid']);
                            $productGroupName = getGroupByGid($product['gid']);

                            if ($product['pricing']['EUR']['monthly'] < 40) {
                            } else {
                        ?>
                                <div <?php if ($product['paytype'] !== 'onetime') {
                                            echo "style='display: none;'";
                                        } ?> class="card card__one" onclick="window.location.href = '?p=<?= $product['pid'] ?>';">
                                    <div class="product-image">
                                        <!-- <img src="app/assets/sneakersLV.png" alt="OFF-white Red Edition" draggable="false" /> -->
                                        <img class="card-img-top" src="api/more/uploads/<?= $productPicture['picture1'] ?>" alt="Card image cap">
                                    </div>
                                    <div class="product-info">
                                        <?php
                                        $sizeLisible = substr(getSize($product['pid'])['size'], 2, -2);
                                        $sizeListProd = explode('", "', $sizeLisible);
                                        foreach ($sizeListProd as $size) {
                                            echo "<p class='sizeProdAll' style='display: none;'>$size</p>";
                                        }
                                        ?>
                                        <h2 class="nameSneakers"><?= $product['name'] ?></h2>
                                        <h6 class="nameMarque marqueSneakAll"><?= $productGroupName ?></h6>
                                        <div class="price"><span class="priceSneakAll"><?= $product['pricing']['EUR']['monthly'] ?></span> €</div>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                        <p id="noProduct" style="display: none;">Y a R</p>
                    </div>
                </div>
                </section>
                <!-- / CARD -->
            </div>


        </main>

        <script src="javascript/filtre.js"></script>
        <script src="javascript/products.js"></script>

    <?php } ?>
    <footer> <?php footer($page); ?> </footer>
</body>

</html>