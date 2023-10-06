<?php

function head($page)
{

    //Page
    if ($page == 1) {
        $title = "Palais de la Sneaks";
    }
    else if ($page == 2) {

        $title = "Palais de la Sneaks";

    } else if ($page == 3) {

        $title = "Nettoyage | Palais de la Sneaks";

    } else if ($page == 4) {

        $title = "Actualités | Palais de la Sneaks";

    } else if ($page == 5) {

        $title = "Therms | Palais de la Sneaks";

    } else {
        $title = "404 | Palais de la Sneaks";
    }


    include "env.php";

    echo '<!doctype html> <html lang="fr"> <head>';
    require_once "composant/meta.phtml";
    echo '<title>' . $title . '</title>';
    echo '<link href="' . $env_urlLogo . '" rel="shortcut icon">';
    require_once "extension.php";
    echo '</head>';
}
