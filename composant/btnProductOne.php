<?php


if (isset($_POST["submit"])) {

    $countPanier = count($_SESSION['cart']['products']);

    $sizeSelected = $_POST['sizeSelected'];

    if ($sizeSelected !== "NULL") {

        $newProductBuy = [
            'pid' => $product['pid'],
            'domain' => '',
            'billingcycle' => null,
            'configoptions' => [],
            'customfields' => [
                1 => $sizeSelected
            ],
            'addons' => [],
            'server' => []
        ];

        if ($counts[$sizeSelected]) {
            if ($counts[$sizeSelected] !== "0") {
                $_SESSION['cart']['products'][$countPanier] = $newProductBuy;
                unset($_POST['submit']);

                echo '<script>window.location.href = "panel/cart.php?a=view";</script>';
                exit();
            }
        }

        //err

    }
}
?>

<form method="post" enctype="multipart/form-data">

    <select name="sizeSelected" class="form-select w-50 mx-auto" aria-label="Default select example">

        <option value="NULL" selected>Taille</option>
        <?php foreach ($sizes as $size) { ?>
            <option value="<?= $size ?>"><?= $size ?> Disponible : <?= $counts[$size] ?>/fois</option>
        <?php } ?>
    </select>

    <button type="submit" value="add" name="submit" id="addToCart" class="cart__button btn btnP btnP--primary">
        Ajoutez ce produit
    </button>

</form>