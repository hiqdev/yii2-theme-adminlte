<?php

use yii\helpers\Html;

?>
<ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <?= $this->render('//layouts/gravatar', ['size' => 90]); ?>
        <p>
            <b><?= Yii::$app->user->identity->username ?></b>

            <?php if (Yii::$app->user->can('support') && Yii::$app->user->identity->seller !== null) : ?>
                <?= ' / ' . Yii::$app->user->identity->seller ?>
            <?php endif ?>

            <?php if (Yii::$app->user->can('support')) : ?>
                <small><?= Yii::$app->user->identity->type ?></small>
            <?php else : ?>
                <br>
            <?php endif ?>

            <?php if (Yii::$app->user->identity->name) : ?>
                <?= Yii::$app->user->identity->name ?>
            <?php endif ?>
        </p>
    </li>
    <!-- Menu Body -->
    <li class="user-body">
        <div class="col-xs-6 text-center">
            <?= Html::a(Yii::t('adminlte', 'Recharge account'), ['@pay/deposit'], ['class' => 'btn btn-default btn-xs btn-flat']); ?>
        </div>
        <div class="col-xs-6 text-center">
            <?= Html::a(Yii::t('adminlte', 'Create ticket'), ['@ticket/create'], ['class' => 'btn btn-default btn-xs btn-flat']); ?>
        </div>
    </li>
    <!-- Menu Footer-->
    <li class="user-footer">
        <div class="pull-left">
            <?= Html::a(Yii::t('adminlte', 'Profile'), ['/site/profile'], ['class' => 'btn btn-primary btn-flat']); ?>
        </div>
        <div class="pull-right">
            <?= Html::a(Yii::t('adminlte', 'Sign out'), ['/site/logout'], ['class' => 'btn btn-danger btn-flat']); ?>
        </div>
    </li>
</ul>
