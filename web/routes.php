<?php

/**
 * Список доступных роутов
 * Формат:
 * /{страница}.php => [get-запрос => компонент]
 *
 */

return [

  "/index.php" => [
      "" => "categories",
      "cat_id" => "category",
      "id" => "product"
  ]

];