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
            <input id="search" type="text" class="form-control w-75 mx-auto" placeholder="Rechercher un porduit, marque...">
            <div class="row">
                <div class="col-2">
                    <h3 class="text-center mb-5">Trier par : </h3>
                    <div class="">
                        <select class="form-select" aria-label="Default select example">
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
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Marque</option>
                            <option value="1">Nike</option>
                            <option value="2">Adidas</option>
                            <option value="3">Yeezy</option>
                            <option value="4">Jordan</option>
                        </select>
                    </div>
                    <div class="mt-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Prix</option>
                            <option value="1">0€ - 50€</option>
                            <option value="2">51€ - 100€</option>
                            <option value="3">101€ - 150€</option>
                            <option value="4">151€ - 200€</option>
                            <option value="5">200€ et plus</option>
                        </select>
                    </div>
                </div>

                <div class="container alert alert-light col-10">
                    <div class="row justify-content-around px-5" id="tableTEST">
                        <?php foreach ($productAll['product'] as $product) {
                            $productPicture = getPicture($product['pid']);
                        ?>
                            <div class="card card__one" style="width: 18rem;" onclick="window.location.href = '?p=<?= $product['pid'] ?>';">
                                <h3 class="p-4 text-center"><?= $product['name'] ?></h3>
                                <p class="card-text text-center">MEN'S TRAINING SHOES</p>
                                <!--                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/2358/2817/products/vaporwaffle-sacai-black-white-131891.png?v=1638814653" alt="Card image cap">-->
                                <div class="cardSneaker" style="height: 200px; background-image: url('api/more/uploads/<?= $productPicture['picture1'] ?>')">

                                </div>
                                <!-- <img class="card-img-top" src="api/more/uploads/<?= $productPicture['picture1'] ?>" alt="Card image cap"> -->
                                <div class="card-body">
                                    <p class="card-text text-center text-danger"><?= $product['pricing']['EUR']['monthly'] ?> €</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>


        </main>

        <script src="javascript/filtre.js"></script>

    <?php } ?>

    <footer> <?php footer($page); ?> </footer>
</body>

</html>