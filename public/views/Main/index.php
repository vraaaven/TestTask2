<?php

require_once('public/views/layouts/header.php'); ?>
<div class="main">
    <div class="main__title">
        <h1>Главная</h1>
    </div>
    <div class="main__news-list">
        <?php foreach ($posts as $post) : ?>
            <a href="/detail/<?= $post->getField('id') ?>" class="main__news-item">
                <div class="posts-list__title"><?= $post->getField('announce') ?></div>
                <time class="posts-list__date"><?= \App\Lib\Helper::formateDate($post->getField('date')) ?></time>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="main__title">
        <a href="/">Все новости</a>
    </div>
    <div class="main__title">
        <a href="/feedback">Обратная связь</a>
    </div>
</div>
<?php require_once('public/views/layouts/footer.php'); ?>
