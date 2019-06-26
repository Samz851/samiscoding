<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article class="uk-article sam-single-post">
<h1 class="uk-article-title"><?= $post->title ?></h1>
    <?php if ($image = $post->get('image.src')): ?>
    <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
    <?php endif ?>
    <p class="uk-article-meta">
        <?= __('Written by %name% on %date%', ['%name%' => $this->escape($post->user->name), '%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
    </p>

    <div class="uk-margin"><?= $post->content ?></div>

    <!-- <?= $view->render('blog/comments.php') ?> -->

</article>
