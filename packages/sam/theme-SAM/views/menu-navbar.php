
<ul class="header-nav__list">

    <?php foreach ($root->getChildren() as $node) : ?>
    <li class="<?= $node->get('active') ? ' current' : '' ?>">
        <a class="smoothscroll" href="<?= $node->getUrl() ?>"><?= $node->title ?></a>

    </li>
    <?php endforeach ?>

<?php if ($root->getDepth() === 0) : ?>
</ul>
<ul class="header-nav__social">
                    <li>
                        <a href="https://medium.com/@samzota"><i class="fa fa-medium" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/samzota/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/Samz851"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <img src="storage/SAM-logo.png" alt="sam logo" width="100px" style="display: block; margin:0 auto;">
<?php endif ?>