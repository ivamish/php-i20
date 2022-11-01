<?php

/**
 * Список доступных роутов
 * Формат:
 * "/{страница}.php" => ["get-запрос" => "компонент"]
 *
 */

return [

      "/index.php" => [
          "" => "main"
      ],

    "/products.php" => [
        "cat_id" => "category",
        "" => "categories"
    ],

    "/product.php" => [
        "id" => "product"
    ]

];