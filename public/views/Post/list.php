<?php

require_once('public/views/layouts/header.php'); ?>
<div class="posts-list">
    <div class="posts-list__title-card">
        <h1>Кейсы</h1>
        <div class="posts-list__title-card-count"><?= $count ?> статей</div>
    </div>
    <div class="posts-list__cards">
        <?php foreach ($posts as $post) : ?>
            <a href="/detail/<?= $post->getField('id') ?>" class="posts-list__card">
                <div class="posts-list__title"><?= $post->getField('announce') ?></div>
                <time class="posts-list__date"><?= \App\Lib\Helper::formateDate($post->getField('date')) ?></time>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="ajax-button">
        <input type="button" value="Еще новости" id="show-more" data-total="<?= $count ?>">
    </div>
</div>
<?php require_once('public/views/layouts/footer.php'); ?>
