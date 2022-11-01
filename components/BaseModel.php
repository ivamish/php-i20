<?php


namespace components;


use vendor\components\Model;
use PDO;

/**
 *
 * Желательно наследоваться от этой модели, так как сюда выносятся общие запросы, которые
 * могут встречаться не на одной странице
 *
 * Class BaseModel
 * @package components
 */
abstract class BaseModel extends Model
{
    protected function get_categories() : array
    {
        $stmt = $this->db->query('SELECT c.id, c.name, count(DISTINCT p.id) AS cnt FROM category c
	LEFT JOIN product_category pc ON pc.category_id = c.id
	LEFT JOIN product_basis pb ON pb.category_id = c.id
	JOIN product p ON p.id = pb.product_id OR p.id = pc.product_id
	GROUP BY c.name, c.id
    ORDER BY cnt DESC
        ');

        return $stmt->fetchAll(PDO::FETCH_UNIQUE);
    }
}