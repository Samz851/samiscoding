<?php $view->script('posts', 'blog:app/bundle/posts.js', 'vue') ?>
<div class="uk-margin uk-grid uk-grid-match uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-6 aos-init aos-animate sam-posts-grid-container" data-uk-grid-margin="" data-uk-grid-match="target: '>div>.uk-panel'" data-aos="fade-up">
    <?php foreach ($posts as $post) : ?>
    <article class="uk-article sam-posts-grid-item">

        <?php if ($image = $post->get('image.src')): ?>
        <a class="uk-display-block" href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>"></a>
        <?php endif ?>

        <h1 class="uk-article-title"><a href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><?= $post->title ?></a></h1>

        <p class="uk-article-meta">
            <?= __('Written by %name% on %date%', ['%name%' => $this->escape($post->user->name), '%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
        </p>

        <div class="uk-margin"><?= $post->excerpt ?: $post->content ?></div>

        <ul class="uk-subnav">

            <?php if (isset($post->readmore) && $post->readmore || $post->excerpt) : ?>
            <a class="uk-button" href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><?= __('Read more') ?></a>
            <?php endif ?>
        </ul>

        <div id="share-buttons-grid">
                 <!-- Buffer -->
                <a href="https://bufferapp.com/add?url='<?= $app['url']->current(0) ?>'&amp;text='<?= $post->title ?>'" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
                </a>
                
                <!-- Digg -->
                <a href="http://www.digg.com/submit?url='<?= $app['url']->current(0) ?>'" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
                </a>
                
                <!-- Email -->
                <a href="mailto:?Subject='<?= $post->title ?>'&amp;Body=Don't miss out on this article '<?= $post->title ?>' @ '<?= $app['url']->current(0) ?>'">
                    <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                </a>
            
                <!-- Facebook -->
                <a href="http://www.facebook.com/sharer.php?u='<?= $app['url']->current(0) ?>'" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                </a>
                
                <!-- Google+ -->
                <a href="https://plus.google.com/share?url='<?= $app['url']->current(0) ?>'" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                </a>
                
                <!-- LinkedIn -->
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url='<?= $app['url']->current(0) ?>'" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                </a>
                
                <!-- Twitter -->
                <a href="https://twitter.com/share?url='<?= $app['url']->current(0) ?>'&amp;text='<?= $post->title ?>'" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                </a>
            </div>
            
    </article>
    <?php endforeach ?>
</div>

<?php

    $range     = 3;
    $total     = intval($total);
    $page      = intval($page);
    $pageIndex = $page - 1;

?>

<?php if ($total > 1) : ?>
<ul class="uk-pagination">


    <?php for ($i = 1; $i <= $total; $i++): ?>
        <?php if ($i <= ($pageIndex + $range) && $i >= ($pageIndex - $range)) : ?>

            <?php if ($i == $page) : ?>
            <li class="uk-active"><span><?= $i ?></span></li>
            <?php else: ?>
            <li>
                <a href="<?= $view->url('@blog/page', ['page' => $i]) ?>"><?= $i ?></a>
            </li>
            <?php endif ?>

        <?php elseif ($i == 1) : ?>

            <li>
                <a href="<?= $view->url('@blog/page', ['page' => 1]) ?>">1</a>
            </li>
            <li><span>...</span></li>

        <?php elseif ($i == $total) : ?>

            <li><span>...</span></li>
            <li>
                <a href="<?= $view->url('@blog/page', ['page' => $total]) ?>"><?= $total ?></a>
            </li>

        <?php endif ?>
    <?php endfor ?>


</ul>
<?php endif ?>
