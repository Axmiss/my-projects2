<?php
$hour = date('H');
if ($hour >= 8 && $hour < 20) {
    $theme = 'light';
} else {
    $theme = 'dark';
}
$title = $title ?? 'Мир ароматов';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Мир ароматов</title>
    <meta name="description" content="Сайт проект">
    <meta name="author" content="Борина Вероника">
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="<?= $theme ?>">


<div class="container">

    <div class="logo-verh">
        <div class="logotip">
            <img src="/assets/images/Логотип.png" alt="Логотип">

        </div>
    </div>

    <div class="icon-nav">
        <div class="pill-icon">

            <div class="nav-item">
                <img src="/assets/images/избранное.png" alt="Избранное">
                <span>Избранное</span>
            </div>

            <div class="nav-item">
                <img src="/assets/images/корзина.png" alt="Корзина">
                <span>Корзина</span>
            </div>

            <div class="nav-item">
                <img src="/assets/images/экспорт.png" alt="Помощь">
                <span>Помощь</span>
            </div>


        </div>
    </div>
    <header>
        <nav class="navigation <?= $theme ?>">
            <div id="nav-container">
                <a href="/index.php" target="parent" class="nav-btn <?= $theme ?>">Главная</a>
                <a href="/pages/about.php" target="parent" class="nav-btn <?= $theme ?>">О нас</a>
                <a href="/pages/products.php" target="parent" class="nav-btn <?= $theme ?>">Каталог</a>
                <a href="/pages/sale.php" target="parent" class="nav-btn <?= $theme ?>">Акции</a>
                <a href="/pages/registration.php" target="parent" class="nav-btn <?= $theme ?>">Вход/Регистрация</a>
            </div>
        </nav>
    </header>