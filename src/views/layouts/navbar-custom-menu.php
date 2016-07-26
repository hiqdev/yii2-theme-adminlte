<?php

use hipanel\widgets\ReminderTop;
use hiqdev\yii2\cart\widgets\PanelTopCart;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<ul class="nav navbar-nav">
    <?php if (Yii::$app->get('languageSwitcher', false) !== null): ?>
        <li class="dropdown language-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?= strtoupper(substr(Yii::$app->language, 0, 2)) ?>
            </a>
            <ul class="dropdown-menu">
                <?php foreach (Yii::$app->get('languageSwitcher')->languages as $code => $language): ?>
                    <li class="header">
                        <?= Html::a(
                            Yii::t('hipanel', $language),
                            Url::to(['/site/language', 'language' => $code]),
                            ['class' => mb_stristr(Yii::$app->language, $code) ? 'text-bold' : '']
                        ) ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </li>
    <?php endif ?>
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
