<?php


namespace components\product;


class Model extends \vendor\components\Model
{

    private function get_product(int $id) : array
    {
        $product = $this->db->query("
            SELECT p.name, p.description, p.price, p.old_price, p.promo_price, i.url, i.alt, c.name as category, c.id
            FROM product p
            JOIN product_basis pb ON pb.product_id = p.id
            JOIN image i ON i.id = pb.image_id
            JOIN category c ON c.id = pb.category_id
            WHERE p.id = $id
        ");

        return $product->fetch();
    }

    private function get_imgs(int $id) : array
    {
        $imgs = $this->db->query("
            SELECT i.url, i.alt FROM image i
            JOIN product_image pim ON pim.image_id = i.id
            WHERE pim.product_id = $id
        ");

        return $imgs->fetchAll();
    }

    private function get_cats(int $id) : array
    {
        $cats = $this->db->query("
            SELECT c.id, c.name FROM category c
            JOIN product_category pc ON pc.category_id = c.id
            WHERE pc.product_id = $id
        ");

        return $cats->fetchAll();
    }

    public function exc(): array
    {
        $product = $this->get_product($_GET['id']);
        $images = $this->get_imgs($_GET['id']);
        $categories = $this->get_cats($_GET['id']);

        return compact('product', 'categories', 'images');
    }
}