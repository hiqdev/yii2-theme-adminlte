<?php

use Yii;
use yii\helpers\Html;

?>
<ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <?= $this->render('//layouts/gravatar', ['size' => 90]); ?>
        <p>
            <?= Yii::$app->user->identity->username; ?>
            <? if (Yii::$app->user->can('support')) { ?>
                - <?= Yii::$app->user->identity->type; ?>
            <? } ?>
            <small>Member since Nov. 2014</small>
        </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
        <div class="col-xs-4 text-center">
            <?= Html::a(Yii::t('app', 'Theme Settings'), ['/thememanager/settings']); ?>
        </div>
        <div class="col-xs-4 text-center">
            <?= Html::a(Yii::t('app', 'Recharge Account'), ['@bill/deposit']); ?>
        </div>
        <div class="col-xs-4 text-center">
            <?= Html::a(Yii::t('app', 'Create Ticket'), ['@ticket/create']); ?>
        </div>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
        <div class="pull-left">
            <?= Html::a(Yii::t('app', 'Profile'), ['/site/profile'], ['class' => 'btn btn-default btn-flat']); ?>
        </div>
        <div class="pull-right">
            <?= Html::a(Yii::t('app', 'Sign out'), ['/site/logout'], ['class' => 'btn btn-default btn-flat']); ?>
        </div>
    </li>
</ul>
