<?php


namespace vendor\components;

use PDO;
use vendor\contracts\IModel;
use vendor\Db;

abstract class Model implements IModel
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

}