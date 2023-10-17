<?php

//System
require_once "env.php";
require_once "head.php";

//Function
require_once "./function/navbar.php";
require_once "./function/footer.php";
require_once "./function/product.php";
require_once "./function/socialLink.php";


function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}