<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Web and App Development">
        <meta name="author" content="Samer Alotaibi">
         <meta property="fb:app_id" content="493683984705461">
        <?= $view->render('head') ?>
        <!-- CSS  -->
        <?php $view->style('bootstrap', 'theme:css/bootstrap.min.css') ?>
        <?php $view->style('base', 'theme:css/base.css') ?>
        <?php $view->style('fonts', 'theme:css/fonts.css') ?>
        <?php $view->style('main', 'theme:css/main.css') ?>
        <?php $view->style('vendor', 'theme:css/vendor.css') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        
        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="storage/favicon.ico" type="image/x-icon">
        <link rel="icon" href="storage/favicon.ico" type="image/x-icon">

        <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
        <script type="application/ld+json">
        {
        "@context" : "http://schema.org",
        "@type" : "Corporation",
        "name" : "Sam is coding...",
        "description": "Creative and Quality web/app development",
        "image" : "https://samiscoding.com/storage/SAM-logo.png",
        "logo"   : "https://samiscoding.com/storage/SAM-logo.png",
        "email": "sam@samiscoding.com",
        "address" : {
            "@type" : "PostalAddress",
            "streetAddress" : "1090 Kristin Way",
            "addressLocality" : "Ottawa",
            "addressRegion" : "ON",
            "addressCountry" : "Canada",
            "postalCode" : "K1K4B6"
        },
        "url": "https://samiscoding.com"
        }
        </script>

        <!-- Global site tag (gtag.js) - AdWords: 963596061 -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-963596061"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-963596061');
        </script>
        
        <script>
        gtag('event', 'page_view', {
            'send_to': 'AW-963596061',
            'user_id': 'replace with value'
        });
        </script> -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125594266-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125594266-1');
        </script> -->
    </head>
    <body id="top">
        <header class="s-header">
            <div class="header-logo">
                <!-- Render logo or title with site URL -->
                <a class="site-logo" href="<?= $view->url()->get() ?>">
                    <?php if ($logo = $params['logo']) : ?>
                <img src="<?= $this->escape($logo) ?>" alt="sam logo">
                <?php else : ?>
                <?= $params['title'] ?>
                <?php endif ?>
                </a>
            </div>
            <nav class="header-nav">
                <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
                <div class="header-nav__content">
                    <h3>Navigation</h3>
                    <!-- Render menu position -->
                    <?php if ($view->menu()->exists('main')) : ?>
                    <?= $view->menu('main', 'menu-navbar.php') ?>
                    <?php endif ?>
                </div> <!-- end header-nav__content -->
            </nav>
            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-text">Menu</span>
                <span class="header-menu-icon"></span>
            </a>
        </header> <!-- end s-header -->

        <!-- Render content -->
        <section>
        <?= $view->render('content') ?>
        <section>
        <!-- Render widget position -->
        <?php if ($view->position()->exists('sidebar')) : ?>
        <section id="sam-portfolio-sidebar">
            <?= $view->position('sidebar') ?>
        </section>
        <?php endif; ?>

        <!-- Insert code before the closing body tag  -->
        <?php if ($view->position()->exists('footer')) : ?>
        <section id="sam-footer">
            <?= $view->position('footer') ?>
        </section>
        <?php endif; ?>
        <?= $view->render('footer') ?>
        <!-- scripts ================================================== -->

        <?php $view->script('modernizr', 'theme:js/modernizr.js', [], ['defer' => true]) ?>
        <?php $view->script('pace', 'theme:js/pace.min.js', [], ['defer' => true]) ?>
        <?php $view->script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', []) ?>
        <?php $view->script('plugins', 'packages/sam/theme-SAM/js/plugins.js', [], ['defer' => true]) ?>
        <?php $view->script('util', 'theme:js/util.js', ['defer' => true]) ?>
        <?php $view->script('modal', 'theme:js/modal.js', ['defer' => true]) ?>
        <?php $view->script('main', 'packages/sam/theme-SAM/js/main.js', [], ['defer' => true]) ?>
        <?php $view->script('theme', 'theme:js/theme.js', [], ['defer' => true]) ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </body>
</html>
