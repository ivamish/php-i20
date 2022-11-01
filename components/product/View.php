<div class="wrap-center">
    <div class="container">
        <div class="product">

            <div class="gallery product__gallery">

                <div class="gallery__items">
                    <img width="90px" height="130px" src="<?= $product['url'] ?>" alt="<?= $product['alt'] ?>" class="gallery__items-img checked">
                    <?php foreach ($images as $img): ?>
                        <img width="90px" height="130px" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" class="gallery__items-img">
                    <?php endforeach; ?>
                </div>

                <div class="gallery__canvas">
                    <img src="<?= $product['url'] ?>" alt="#" class="gallery__canvas-img">
                </div>

            </div>

            <div class="product__info">

                <h1 class="product__title">
                    <?= $product['name'] ?>
                </h1>

                <nav class="product__nav">
                    <a href="products.php?cat_id=<?= $product['id'] ?>" class="product__nav-item"><?= $product['category'] ?></a>
                    <?php foreach ($categories as $cat): ?>
                        <a href="products.php?cat_id=<?= $cat['id'] ?>" class="product__nav-item"><?= $cat['name'] ?></a>
                    <?php endforeach; ?>
                </nav>

                <div class="product__price">
                    <div class="product__price-cross">
                        <?= $product['old_price'] ?>
                    </div>
                    <div class="product__price-base">
                        <?= $product['price'] ?>
                    </div>
                    <div class="product__price-promo">
                        <span><?= $product['promo_price'] ?> </span> — с промокодом
                    </div>
                </div>

                <div class="product__ticks">
                    <div class="product__ticks-item">
                        <img src="assets/icons/check.png" alt="check" class="product__ticks-item-img">
                        <div class="product__ticks-item-descr">В наличии в магазине Lamoda</div>
                    </div>
                    <div class="product__ticks-item">
                        <img src="assets/icons/delivery.png" alt="delivery" class="product__ticks-item-img">
                        <div class="product__ticks-item-descr">Бесплатная доставка</div>
                    </div>
                </div>

                <div class="product__count">
                    <div class="product__count-minus disabled">
                        -
                    </div>

                    <div class="product__count-display">
                        1
                    </div>

                    <div class="product__count-plus">
                        +
                    </div>
                </div>

                <div class="product__btns">
                    <button id="buy" class="btn btn--blue">Купить</button>
                    <button class="btn">в избранное</button>
                </div>

                <div class="product__descr">
                    <?= $product['description'] ?>
                </div>

                <div class="product__share">
                    <div class="product__share-text">
                        Поделиться:
                    </div>
                    <div class="product__share-icons">
                        <div class="product__share-icons-round">
                            <img src="assets/icons/vk.png" alt="vk">
                        </div>
                        <div class="product__share-icons-round">
                            <img src="assets/icons/google.png" alt="google">
                        </div>
                        <div class="product__share-icons-round">
                            <img src="assets/icons/fc.png" alt="fc">
                        </div>
                        <div class="product__share-icons-round">
                            <img src="assets/icons/twitter.png" alt="twitter">
                        </div>
                    </div>
                    <div class="product__share-rectangle">
                        123
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="modal">
    <div class="modal__content slide-top">
        <div class="modal__text">
            В корзину добавлено х товаров
        </div>
        <button id="close" class="btn btn--blue modal__btn">
            Спасибо
        </button>
    </div>
</div>
