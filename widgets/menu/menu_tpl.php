<?php
    $page = substr($_SERVER["PHP_SELF"], 1);
?>

<nav class="header__nav">
    <?php foreach ($items as $item => $link): ?>
        <a href="<?= $link ?>" class="header__nav-item <?= $page === $link ? 'header__nav-item--active' : '' ?>"><?= $item ?></a>
    <?php endforeach; ?>
</nav>