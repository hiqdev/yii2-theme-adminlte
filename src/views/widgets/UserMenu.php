<?php

use yii\helpers\Html;

?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <?= $this->render('//layouts/gravatar', ['class' => 'user-image']) ?>
    <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
</a>
<ul class="dropdown-menu">
    <li class="user-header">
        <?= $header ?>
    </li>
    <li class="user-body">
        <?= $body ?>
    </li>
    <li class="user-footer">
        <div class="pull-left">
            <?= Html::a(Yii::t('adminlte', 'Profile'), ['/site/profile'], ['class' => 'btn btn-primary btn-flat']) ?>
        </div>
        <div class="pull-right">
            <?= Html::a(Yii::t('adminlte', 'Sign out'), ['/site/logout'], ['class' => 'btn btn-danger btn-flat']) ?>
        </div>
    </li>
</ul>
