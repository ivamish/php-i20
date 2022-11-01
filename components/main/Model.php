<?php


namespace components\main;


class Model extends \vendor\components\Model
{

    public function exc(): array
    {
        $page = $_GET['page'] ?? 1;
        $offset = 12 * ($page - 1);

        $products = $this->db->query("SELECT p.id, p.name, i.url, i.alt, c.name as category
        FROM product p
        JOIN product_basis pb ON pb.product_id = p.id
        JOIN image i ON i.id = pb.image_id
        JOIN category c ON c.id = pb.category_id
        WHERE p.is_active = 1
        LIMIT 12 OFFSET $offset
        ");

        $products = $products->fetchAll();

        $count = $this->db->query("SELECT count(*) as cnt FROM product");
        $count = $count->fetch();
        $count = $count['cnt'];

        return compact('products', 'count');
    }
}

// 1 2 3 4 | 5 6 7 8 | 9 10 11 12