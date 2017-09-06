<?php

use hiqdev\themes\adminlte\widgets\Gravatar;
use yii\helpers\Html;

$this->blocks['bodyClass'] = 'lockscreen';
$this->title = Yii::t('adminlte', 'Lockscreen');
$identity = Yii::$app->user->identity;

?>

<style>
</style>


<div class="lockscreen-item">
    <div class="lockscreen-image">
        <?= Gravatar::widget([
            'size'  => 128,
            'email' => $identity->email,
            'alt'   => $identity->username,
        ]) ?>
    </div>
</div>
<h3><?= $identity->username ?></h3>
<div class="lockscreen-container">
    <div class="lockscreen-name">
        <a href="/site/back" class="btn btn-primary"><?= Yii::t('adminlte', 'Return to the site') ?></a>
    </div>
    <div class='text-center' style="margin-top: 1em;">
        <?= Html::a(Yii::t('adminlte', 'Or log out and sign in as a different user'), ['/site/logout']) ?>
    </div>
</div>
