<?php

use yii\helpers\Html;
use yii\web\View;

/**
 * @var yii\web\View $this View
 * @var string $content Content
 */

$this->registerJs(<<<'JS'
$(function () {
    $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
JS
, View::POS_READY);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->render('//layouts/_head') ?>
    </head>

    <body class="<?= empty($this->blocks['bodyClass']) ? 'login-page' : $this->blocks['bodyClass'] ?>">
    <?php $this->beginBody() ?>
        <?php if (Yii::$app->themeManager->hasWidget('Flashes')) : ?>
            <?= Yii::$app->themeManager->widget('Flashes') ?>
        <?php endif ?>

        <div class="login-box">
            <div class="login-logo">
                <b><?= Html::a(Yii::$app->params['organizationName'], ['/']) ?></b>
            </div>
            <?= $content ?>
        </div>

        <div style="position:fixed;bottom:0;width:100%">
            <div class="text-center small">
                <strong>&copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?></strong>. All rights reserved.
                <br>
                <?= Yii::$app->themeManager->widget('PoweredBy') ?>
            </div>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
