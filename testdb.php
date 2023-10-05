<?php include "app/app.php"; $page = 99; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>

    <p>Exemple</p>

</main>

<?php
require_once 'panel/init.php';
require_once 'api/whmcs/connect.php';

$produitAll = product();

foreach ($produitAll["product"] as $product) {

       var_dump($product);

}

?>

</body> </html>