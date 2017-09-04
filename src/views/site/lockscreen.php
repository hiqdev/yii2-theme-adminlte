<?php

use hiqdev\themes\adminlte\widgets\Gravatar;
use yii\helpers\Html;

$this->blocks['bodyClass'] = 'lockscreen';
$this->title = Yii::t('adminlte', 'Lockscreen');
$identity = Yii::$app->user->identity;

?>

<!-- User name -->
<div class="lockscreen-name">
    <a href="/site/back"><?= Yii::t('adminlte', 'Return to the site') ?></a>
</div>

<!-- START LOCK SCREEN ITEM -->
<div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
        <?= Gravatar::widget([
            'size'  => 128,
            'email' => $identity->email,
            'alt'   => $identity->username,
        ]) ?>
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="/site/back">
        <input type="submit" class="form-control btn" style="font-weight:bold" value="<?= $identity->username ?>" />
    </form><!-- /.lockscreen credentials -->

</div><!-- /.lockscreen-item -->
<div class='text-center'>
    <b><?= Html::a(Yii::t('adminlte', 'Or log out and sign in as a different user'), ['/site/logout']) ?></b>
</div>
