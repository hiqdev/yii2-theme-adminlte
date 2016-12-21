<?php

use yii\helpers\Html;
use yii\widgets\Menu;

?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <?= $this->render('//layouts/gravatar', ['class' => 'user-image']) ?>
    <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
</a>
<ul class="dropdown-menu">
    <li class="user-header">
        <?= $header['label'] ?>
    </li>
    <li class="user-body">
        <?= Menu::widget([
            'items' => $items,
            'itemOptions' => [
                'tag' => 'div',
                'class' => 'col-xs-6 text-center',
            ],
            'linkTemplate' => '<a href="{url}" class="btn btn-default btn-xs btn-flat">{label}</a>',
            'options' => [
                'tag' => false,
            ],
        ]) ?>
    </li>
    <li class="user-footer">
        <div class="pull-left">
            <?= Html::a($profile['label'], $profile['url'], ['class' => 'btn btn-primary btn-flat']) ?>
        </div>
        <div class="pull-right">
            <?= Html::a($logout['label'], $logout['url'], ['class' => 'btn btn-danger btn-flat']) ?>
        </div>
    </li>
</ul>
