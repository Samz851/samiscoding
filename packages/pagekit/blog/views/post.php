<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article class="uk-article sam-single-post">
<h1 class="uk-article-title"><?= $post->title ?></h1>
    <?php if ($image = $post->get('image.src')): ?>
    <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
    <?php endif ?>
    <div id="share-buttons">
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
    <p class="uk-article-meta">

        <?= __('Written by %name% on %date%', ['%name%' => $this->escape($post->user->name), '%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
    </p>
    <div class="uk-margin"><?= $post->content ?></div>
    <div id="share-buttons">
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
