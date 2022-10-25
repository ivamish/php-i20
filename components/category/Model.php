<?php


namespace components\category;


class Model extends \vendor\components\Model
{
    public function exc() : array
    {
        $stmt = $this->db->query('SELECT name FROM category');
        $res = $stmt->fetchAll();
        return ['category' => $res];
    }
}