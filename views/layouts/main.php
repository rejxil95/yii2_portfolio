<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- <link rel="manifest" href="site.webmanifest"> -->

    <?php $this->head() ?>
</head>
<body id="top">
    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <?php $this->beginBody() ?>

        <!-- # preloader
            ================================================== -->
            <div id="preloader">
                <div id="loader">
                </div>
            </div>

        <!-- <header id="header">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest
                        ? ['label' => 'Login', 'url' => ['/site/login']]
                        : '<li class="nav-item">'
                            . Html::beginForm(['/site/logout'])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'nav-link btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                ]
            ]);
            NavBar::end();
            ?>
        </header> -->

        <!-- ## site header 
                ================================================== -->
                <header class="s-header">

                    <div class="header-mobile">
                        <span class="mobile-home-link"><a href="index.html">Luther.</a></span>
                        <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
                    </div>

                    <div class="row wide main-nav-wrap">
                        <nav class="column lg-12 main-nav">
                            <ul>
                                <li><a href="<?php echo Url::home(); ?>" class="home-link">Luther.</a></li>
                                <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                                <li><a href="#about" class="smoothscroll">About</a></li>
                                <li><a href="#works" class="smoothscroll">Works</a></li>
                                <li><a href="#contact" class="smoothscroll">Say Hello</a></li>
                            </ul>
                        </nav>
                    </div>

                </header> <!-- end s-header -->

        <main id="main" class="s-content" role="main">
            <div class="container">
                <?php if (!empty($this->params['breadcrumbs'])): ?>
                    <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
                <?php endif ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>

        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row">
                <div class="column ss-copyright">
                    <span>© Copyright Luther 2021</span> 
                    <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">Themewagon</a></span>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z"/></svg>
                    </a>
                </div>
            </div>

        </footer> <!-- end s-footer -->

        <?php $this->endBody() ?>

    <!-- Java Script
        ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </div> <!-- end -s-pagewrap -->
</body>
</html>
<?php $this->endPage() ?>

<style>
    .ss-go-top {
    width: auto;  /* Prevents it from inheriting width */
    flex-shrink: 0;  /* Prevents it from shrinking in flex containers */
}
</style>
