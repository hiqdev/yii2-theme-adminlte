<?php

use hiqdev\themes\adminlte\widgets\Gravatar;
use yii\helpers\Html;

$this->blocks['bodyClass'] = 'lockscreen';
$this->title = Yii::t('adminlte', 'Lockscreen');

?>

<!-- User name -->
<div class="lockscreen-name"><?= Yii::$app->user->identity->username ?></div>

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
        <input type="submit" class="form-control btn" value="<?= Yii::t('adminlte', 'Return to the site') ?>" />
    </form><!-- /.lockscreen credentials -->

</div><!-- /.lockscreen-item -->
<div class='text-center'>
    <b><?= Html::a(Yii::t('adminlte', 'Or log out and sign in as a different user'), ['/site/logout']) ?></b>
</div>
