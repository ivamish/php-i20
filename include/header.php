<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/config/config.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>magazine</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__flex">

            <?php \widgets\menu\Menu::render(); ?>

            <div class="header__cart">
                <img src="assets/icons/cart.png" alt="cart" class="header__cart-img">
            </div>
        </div>
    </div>
</header>