<?php
    $root = __DIR__."/";

    $just_url = explode("?", $_SERVER['REQUEST_URI']);

    if($just_url[0] == "/") {
        require $root."index.php";
    } elseif ($just_url[0] == "/LazaLend/item-dashboard") {
        require $root."item-dashboard.php";
    }
?>