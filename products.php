<?php include "app/app.php";
$page = 2;
head($page); ?>

<body>
    <header> <?php navbar($page); ?> </header>


    <?php
    require_once 'panel/init.php';
    require_once 'api/whmcs/connect.php';

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
                    <?php foreach ($productAll['product'] as $product) { ?>
                        <div class="card" style="width: 18rem;">
                            <h3 class="p-4 text-center"><?= $product['name'] ?></h3>
                            <p class="card-text text-center">MEN'S TRAINING SHOES</p>
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center"><?= $product['pricing']['EUR']['monthly'] ?> €</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>


                <div class="card-group">

                    <?php foreach ($productAll['product'] as $product) {  ?>


                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['name'] ?></h5>
                                <p class="card-text"><?= $product['description'] ?></p>
                                <p class="card-text"><small class="text-muted"><?= $product['pricing']['EUR']['monthly'] ?></small></p>
                                <a href='?p=<?= $product['pid'] ?>'>je suis le detail</a>
                            </div>
                        </div>


                    <?php } ?>
                </div>

        </main>


    <?php } ?>

    <footer> <?php footer($page); ?> </footer>
    <script src="javascript/filtre.js"></script>

</body>

</html>