<?php

use hiqdev\themes\adminlte\widgets\Gravatar;
use yii\helpers\Html;

$this->blocks['bodyClass'] = 'lockscreen';
$this->title = 'Lockscreen';

?>

<!-- User name -->
<div class="lockscreen-name"><?= Yii::$app->user->identity->login ?></div>

<!-- START LOCK SCREEN ITEM -->
<div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
        <?= Gravatar::widget([
            'size'  => 128,
            'email' => Yii::$app->user->identity->email,
            'alt'   => Yii::$app->user->identity->username,
        ]) ?>
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="/site/back">
        <input type="submit" class="form-control btn" value="Return to site" />
    </form><!-- /.lockscreen credentials -->

</div><!-- /.lockscreen-item -->
<div class='text-center'>
    <b><?= Html::a('Or logout and sign in as a different user', ['/site/logout']) ?></b>
</div>
