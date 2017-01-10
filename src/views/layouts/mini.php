<?php

use hiqdev\thememanager\menus\AbstractLanguageMenu;
use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\Flashes;
use hiqdev\thememanager\widgets\LogoLink;
use hiqdev\thememanager\widgets\OrganizationLink;
use hiqdev\thememanager\widgets\PoweredBy;
use hiqdev\themes\adminlte\MiniAsset;
use yii\web\View;

/**
 * @var yii\web\View View
 * @var string $content Content
 */
MiniAsset::register($this);
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
        <?= Flashes::widget() ?>

        <div class="login-box">
            <div class="login-logo">
                <b><?= LogoLink::widget() ?></b>
            </div>
            <?= $content ?>
        </div>

        <div class="footer-copyright">
            <div class="text-center small">
                <?php if (Yii::$container->has(AbstractLanguageMenu::class)) : ?>
                    <?= AbstractLanguageMenu::widget() ?>
                <?php endif ?>
                &copy; <?= CopyrightYears::widget() ?> <?= OrganizationLink::widget() ?>. All rights reserved.
                <br>
                <?= PoweredBy::widget() ?>
            </div>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
