<?php


namespace components\category;
use components\BaseModel;
use PDO;

class Model extends BaseModel
{
    private function get_products_by_category(int $id) : array
    {
        $smtp = $this->db->query("
            SELECT DISTINCT p.id, p.name, i.url, i.alt, c.name AS category FROM product p
            LEFT JOIN product_category pc ON pc.product_id = p.id
                LEFT JOIN product_basis pb ON pb.product_id = p.id
                    JOIN image i ON i.id = pb.image_id
                        JOIN category c ON c.id = pb.category_id OR c.id = pc.category_id
                WHERE p.is_active = 1 AND c.id = $id
        ");

        return $smtp->fetchAll();
    }

    private function get_category(int $id) : array
    {
        $smtp = $this->db->query("
            SELECT c.name, c.description FROM category c 
            WHERE c.id = $id;
        ");

        return $smtp->fetch();
    }

    private function count_products(int $id): int
    {
        $smtp = $this->db->query("
        SELECT COUNT(DISTINCT p.id) as cnt FROM product p
        LEFT JOIN product_category pc ON pc.product_id = p.id
                LEFT JOIN product_basis pb ON pb.product_id = p.id
                     JOIN category c ON c.id = pb.category_id OR c.id = pc.category_id
        WHERE c.id = $id
        ");

        return ($smtp->fetch())['cnt'];
    }

    public function exc(): array
    {
        $categories = $this->get_categories();
        $category = $this->get_category($_GET['cat_id']);
        $products = $this->get_products_by_category($_GET['cat_id']);
        $count = $this->count_products($_GET['cat_id']);

        return compact('categories', 'products', 'category', 'count');
    }
}