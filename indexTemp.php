<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<?php
require_once 'api/whmcs/connect.php';

$productAll = product();

?>


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

<div style="height: 100000px"></div>

</main>

</body> </html>