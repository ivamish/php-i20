<!--// << < 1 2 [3] 4 5 > >>-->
<nav class="category__pagination">

        <?php if($currentPage > 1): ?>
            <a class='category__pagination-item' href="<?= get_links_with_query('page', $currentPage - 1) ?>">←</a>
        <?php endif; ?>

        <?php if($currentPage > 3): ?>
            <a class='category__pagination-item' href="<?= get_links_with_query('page', $currentPage - 2) ?>"><?=$currentPage - 2 ?></a>
        <?php endif; ?>

        <?php if($currentPage - 1 > 0): ?>
            <a class='category__pagination-item' href="<?= get_links_with_query('page', $currentPage - 1) ?>"><?=$currentPage - 1 ?></a>
        <?php endif; ?>


    <a class='category__pagination-item category__pagination-item--active' href='#'> <?= $currentPage ?> </a>

        <?php if($currentPage + 1 <= $perpage): ?>
            <a class='category__pagination-item' href="<?= get_links_with_query('page', $currentPage + 1) ?>"><?= $currentPage + 1 ?></a>
        <?php endif; ?>

        <?php if($currentPage + 2 <= $perpage): ?>
            <a class='category__pagination-item' href="<?= get_links_with_query('page', $currentPage + 2) ?>"><?= $currentPage + 2 ?></a>
        <?php endif; ?>

        <?php if($currentPage < $perpage): ?>
            <a class='category__pagination-item' href="<?= get_links_with_query('page', $currentPage + 1) ?>">→</a>
        <?php endif; ?>

</nav>
