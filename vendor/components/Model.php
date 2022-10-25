<?php


namespace vendor\components;

use PDO;
use vendor\contracts\IModel;

abstract class Model implements IModel
{
    protected PDO $db;

    public function __construct()
    {
        $params = require_once $_SERVER['DOCUMENT_ROOT'] . "/config/config_db.php";

        $host = $params['host'];
        $db   = $params['db'];
        $user = $params['user'];
        $pass = $params['password'];
        $charset = $params['charset'];

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->db = new PDO($dsn, $user, $pass, $opt);
    }

}