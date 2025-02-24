<?php

use hiqdev\thememanager\widgets\AlertWidget;
use hiqdev\thememanager\widgets\Flashes;
use yii\widgets\Breadcrumbs;
use Yii;

?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <?= AlertWidget::widget() ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $this->title ?>
            <?php if (isset($this->params['subtitle'])) : ?>
                <small><?= $this->params['subtitle'] ?></small>
            <?php endif ?>
        </h1>
        <?= Breadcrumbs::widget([
            'homeLink' => [
                'label' => '<i class="fa fa-dashboard"></i> ' . Yii::t('adminlte', 'Home'),
                'url'   => '/',
            ],
            'encodeLabels' => false,
            'tag'          => 'ol',
            'links'        => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : null,
        ]) ?>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?= Flashes::widget() ?>

                <?= $content ?>
            </div>
            <?php if ($this->blocks['ad-banner.dashboard']) : ?>
                <div class="col-md-12 text-center">
                    <?= $this->blocks['ad-banner.dashboard'] ?>
                </div>
            <?php endif ?>
        </div>
    </section>
</div>
