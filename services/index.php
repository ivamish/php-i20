<?php

require_once '../config/config.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: http://i20-php/index.php');
}
$className = "\services\\" . $_POST['service'];
$service = new $className;

if(!$service->exc()){
    echo 404;
}