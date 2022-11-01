<section class="category">
    <div class="container">
        <h1 class="category__title">Все категории</h1>
        <div class="category__grid category__grid--auto">
            <?php foreach ($categories as $k => $category): ?>
                <?php
                    $color = '';
                    if($k % 5 === 0) {
                        $color = 'category__category-top--purple';
                    }elseif ($k % 4 === 0) {
                        $color = 'category__category-top--green';
                    }elseif ($k % 3 === 0) {
                        $color = 'category__category-top--yellow';
                    }elseif ($k % 2 === 0) {
                        $color = 'category__category-top--pink';
                    }else{
                        $color = 'category__category-top--blue';
                    }
                ?>
                <a href="products.php?cat_id=<?= $k ?>" class="category__category">
                    <div class="category__category-top <?= $color ?>">
                        <?= $category['cnt'] ?>
                        <span>товаров</span>
                    </div>
                    <div class="category__category-bot">
                        <?= $category['name'] ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>