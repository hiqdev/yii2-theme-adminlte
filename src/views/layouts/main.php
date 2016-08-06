<?php

/**
 * Theme main layout.
 *
 * @var frontend\components\View View
 * @var string                   Content
 */
use hipanel\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

// Collapse Side bar
$this->registerJs(<<<'JS'
$(".sidebar-toggle").on("click", function() {
    var collapsed_sidebar = $('body').hasClass('sidebar-collapse') ? 0 : 1;
    $.post( "/thememanager/settings/collapsed-sidebar", {collapsed_sidebar: collapsed_sidebar});
});
$(document).on('click', 'a[data-toggle="control-sidebar"]', function(event) {
    $.get( "/thememanager/settings", function( data ) {
        $( ".control-sidebar-content" ).html( data );
    });
    $( this ).off( event );
});
JS
);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<body class="sidebar-mini <?= $this->bodyClasses ?>">
<?php $this->beginBody(); ?>
<!-- Site wrapper -->
<div class="wrapper">
    <!-- The Right Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <div class="control-sidebar-content" style="padding: 0 1rem;">
            <p class="text-center" style="padding-top: 3rem;">
                <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
            </p>
        </div>
    </aside>
    <!-- The sidebar's background -->
    <!-- This div must placed right after the sidebar for it to work-->
    <div class="control-sidebar-bg"></div>
    <!-- header logo: style can be found in header.less -->
    <header class="main-header">
        <a href="<?= Yii::$app->homeUrl ?>" class="logo">
            <span class="logo-mini">&nbsp;</span>
            <span class="logo-lg">&nbsp;</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <?= $this->render('navbar-custom-menu'); ?>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->

    <?= $this->render('sidebar'); ?>

    <!-- =============================================== -->

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= $this->title ?>
                <?php if (isset($this->subtitle)) : ?>
                    <small><?= $this->subtitle ?></small>
                <?php endif; ?>
            </h1>
            <?= Breadcrumbs::widget([
                'homeLink' => [
                    'label' => '<i class="fa fa-dashboard"></i> ' . Yii::t('adminlte', 'Home'),
                    'url'   => '/',
                ],
                'encodeLabels' => false,
                'tag'          => 'ol',
                'links'        => isset($this->breadcrumbs) ? $this->breadcrumbs->getItemsArray() : null,
            ]) ?>
        </section>

        <!-- Main content -->
        <section class="content container-fluid"><div class="row"><div class="col-md-12">
            <?= Alert::widget(); ?>
            <?= $content ?>
        </div></div></section>
    </div><!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <?php if (Yii::$app->params['poweredByName']) : ?>
                Powered by <a href="<?= Yii::$app->params['poweredByUrl'] ?>"><?= Yii::$app->params['poweredByName'] ?></a>
                <?php if (Yii::$app->params['poweredByVersion']) : ?>
                    version <?= Yii::$app->params['poweredByVersion'] ?>
                <?php endif ?>
            <?php endif ?>
        </div>
        <strong>Copyright &copy; <?= $this->render('//layouts/copyrightYears') ?> <?= Html::a(Yii::$app->params['orgName'], Yii::$app->params['orgUrl']); ?>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
