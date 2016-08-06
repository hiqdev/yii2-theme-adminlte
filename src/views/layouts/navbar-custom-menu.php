<?php

use hipanel\widgets\ReminderTop;
use hiqdev\yii2\cart\widgets\PanelTopCart;
use hiqdev\yii2\language\widgets\LanguageMenu;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<ul class="nav navbar-nav">
    <?= LanguageMenu::widget() ?>
    <?= ReminderTop::widget() ?>
    <?= PanelTopCart::widget() ?>
    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $this->render('//layouts/gravatar', ['class' => 'user-image']) ?>
            <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
        </a>
        <?= $this->render('//layouts/user-menu') ?>
    </li>
    <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
    </li>
</ul>
