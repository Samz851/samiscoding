<h1 class="uk-margin"><?= $post->title ?></h1>
<?php if ($post->isPostStyle() == __('Default Post') && !empty($post->data['image']['src'])): ?>
    <img src="<?= $post->data['image']['src'] ?>" data-sam-asshole alt="<?= $post->data['image']['alt'] ?>">
<?php endif; ?>
