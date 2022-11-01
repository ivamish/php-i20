<?php
    require_once "include/header.php";


    $route = new \vendor\Router();
    $route->run();

    require_once "include/footer.php";