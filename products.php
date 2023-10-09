<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>


<?php
require_once 'panel/init.php';
require_once 'api/whmcs/connect.php';

$productAll = product();

?>






<?php if(!empty($_GET['p'])){

    $id = $_GET['p'];

    productOne($id);

} else { ?>

    <main>

        <div class="container alert alert-light">
            <h2>FILTRE</h2>
            <br>
            <input id="search" type="text" class="form-control"  placeholder="Search for name and email......">
            <br>

            <div class="card-group" id="tableTEST">

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

    <script src="javascript/filtre.js"></script>

<?php } ?>

<footer> <?php footer($page); ?> </footer>
</body> </html>