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

    ?>


    <?php if (!empty($_GET['p'])) {

        $id = $_GET['p'];

        productOne($id);
    } else { ?>

        <main>

            <div class="container alert alert-light">
                <h2>FILTRE</h2>
                <br>
                <input id="search" type="text" class="form-control" placeholder="Search for name and email......">
                <br>

                <div class="row justify-content-around px-5" id="tableTEST">
                    <?php foreach ($productAll['product'] as $product) {
                        $productPicture = getPicture($product['pid']);
                        ?>
                        <div class="card card__one" style="width: 18rem;" onclick="window.location.href = '?p=<?= $product['pid'] ?>';">
                            <h3 class="p-4 text-center"><?= $product['name'] ?></h3>
                            <p class="card-text text-center">MEN'S TRAINING SHOES</p>
<!--                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="Card image cap">-->
                            <img class="card-img-top" src="api/more/uploads/<?= $productPicture['picture1'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-danger"><?= $product['pricing']['EUR']['monthly'] ?> €</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </main>

        <script src="javascript/filtre.js"></script>

    <?php } ?>

    <footer> <?php footer($page); ?> </footer>
</body>

</html>