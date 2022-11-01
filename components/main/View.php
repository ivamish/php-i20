<section class="category">
    <div class="container">
        <div class="category__flex category__flex--center">
            <main class="category__content">
                <h1 class="category__title">Все товары</h1>
                <div class="category__grid">
                    <?php foreach ($products as $product): ?>
                        <a href="product.php?id=<?= $product['id'] ?>" class="category__product">
                            <div class="category__product-img"><img width="218px" height="164px" src="<?= $product['url'] ?>" alt="<?= $product['alt'] ?>"></div>
                            <div class="category__product-title"><?= $product['name'] ?></div>
                            <div class="category__product-category"><?= $product['category'] ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
                <?php if($count >= 12): ?>
                    <div class="category__pagination">
                        <?php
                        $current = $_GET['page'] ?? 1;
                        \widgets\paginator\Paginator::render($count, 12, $current) ?>
                    </div>
                <?php endif; ?>
            </main>
        </div>
    </div>
</section>