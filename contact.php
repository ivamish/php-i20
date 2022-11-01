<?php
require_once 'include/header.php';
?>

    <div class="container">
        <div class="wrap">
            <form action="services/index.php" class="form" method="post">

                <?php \vendor\Services::bindProvider('ContactService'); ?>

                <h1 class="title form__title">Написать нам</h1>

                <div class="form__field form__mb52">
                    <label for="name" class="form__label">Имя</label>
                    <input <?= get_border_validate('name') ?> <?= get_errors_or_cookie('name') ?> id="name" name="name" type="text" class="form__input">
                    <div style="color: red; font-size: 12px"><?= $_SESSION['errors']['name'] ?? '' ?></div>
                </div>

                <div class="form__field form__mb22">
                    <label for="email" class="form__label">Электронная почта</label>
                    <input <?= get_border_validate('email') ?> <?= get_errors_or_cookie('email') ?> id="email" name="email" type="text" class="form__input">
                    <div style="color: red; font-size: 12px"><?= $_SESSION['errors']['email'] ?? '' ?></div>
                </div>

                <div class="form__field form__mb22">
                    <label for="year" class="form__label">Год рождения</label>
                    <select name="year" class="form__label form__select" id="year">
                        <?php for($i = 1960; $i < 2010; $i++): ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                </div>

                <div class="form__flex">
                    <div class="form__radio">
                        <label for="female">Женщина</label> <br>
                        <input id="female" name="sex" value="female" type="radio" class="form__checkbox">
                    </div>
                    <div class="form__radio">
                        <label for="male">Мужчина</label> <br>
                        <input checked id="male" name="sex" value="male" type="radio" class="form__checkbox">
                    </div>
                </div>

                <div class="form__field form__mb22">
                    <label for="title" class="form__label">Тема обращения</label>
                    <input <?= get_border_validate('title') ?> <?= get_errors_or_cookie('title') ?> id="title" name="title" type="text" class="form__input">
                    <div style="color: red; font-size: 12px"><?= $_SESSION['errors']['title'] ?? '' ?></div>
                </div>

                <div class="form__field form__mb22">
                    <label for="content" class="form__label">Суть вопроса</label>
                    <textarea placeholder="Изложите суть вопроса..." id="content" name="content" class="form__input form__textarea"></textarea>
                </div>

                <div class="form__field form__mb22">
                    <div class="form__flex">
                        <input name="agree" id="agree" type="checkbox" class="form__checkbox">
                        <label for="agree">С контрактом ознакомлен</label>
                    </div>
                </div>

                <button type="submit" class="btn-form form__btn">Отправить</button>
            </form>
        </div>
    </div>
<script>
    const style = document.createElement('link');
    style.rel = 'stylesheet';
    style.href = 'assets/css/body.css';
    document.querySelector('head').append(style);

    const check = document.getElementById('agree'),
          btn = document.querySelector('.btn-form');

    btn.disabled = true;

    check.addEventListener('change', (e) => {
        btn.disabled = !check.checked;
    });
</script>
<?php
require_once 'include/footer.php';
unset($_SESSION['errors']);
?>