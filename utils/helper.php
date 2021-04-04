<?php

function getHeader() {
    include_once './views/partials/header.php';
}

function getFooter() {
    include_once './views/partials/footer.php';
}

function redirect($path)
{
    return header('Location: ' . $path);
}
