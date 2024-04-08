<!doctype html>
<html>
<head>
    <title><?= 'Главная'; ?></title>
    <script src="/public/scripts/jquery-3.7.1.min.js"></script>
    <script src="/public/scripts/load_posts.js"></script>
    <script src="/public/scripts/header.js"></script>
    <script src="/public/scripts/post.js"></script>
    <link rel="stylesheet" href="/public/styles/header/header.css">
    <link rel="stylesheet" href="/public/styles/posts-list/posts-list.css">
    <link rel="stylesheet" href="/public/styles/post/post.css">
    <link rel="stylesheet" href="/public/styles/main/main.css">
    <link rel="stylesheet" href="/public/styles/feedback/feedback.css">
    <?php
    if (isset($vars[0]['detail_text'])) : ?>
        <meta name="description" content="<?= ($vars[0]["detail_text"]) ?>">
    <?php
    endif; ?>
</head>
<body>
<div class="header">
    <div class="header__wrapper">
        <div class="header__item">
            <nav class="header-nav">
                <div class="header-nav__wrapper">
                </div>
                <ul class="header-nav__list">
                    <li class="header-nav__list-item">
                        <a class="header-nav__list-item-link" href="/">Главная</a>
                    </li>
                    <li class="header-nav__list-item">
                        <a class="header-nav__list-item-link" href="/feedback">Обратная связь</a>
                    </li>
                    <li class="header-nav__list-item">
                        <a class="header-nav__list-item-link" href="/posts">Новости</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__item">
            <div class="header-side">
                <div class="header-side__bottom">
                    <div class="header-side__burger">
                        <img src="/public/images/burger-menu-svgrepo-com.svg" alt="" width="29" height="28">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
