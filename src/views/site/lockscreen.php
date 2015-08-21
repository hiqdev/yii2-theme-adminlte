<?php

use hiqdev\themes\adminlte\widgets\Gravatar;
use Yii;
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
    <form class="lockscreen-credentials">
        <input type="submit" class="form-control btn" value="Return to HiPanel" />
    </form><!-- /.lockscreen credentials -->

</div><!-- /.lockscreen-item -->
<!-- div class="help-block text-center">
    Enter your password to retrieve your session
</div -->
<div class='text-center'>
    <b><?= Html::a('Or logout and sign in as a different user', ['/site/logout']) ?></b>
</div>
<div class='lockscreen-footer text-center'>
    Copyright &copy; 2014-<?= date('Y') ?> <b><a href="<?= Yii::$app->params['orgUrl'] ?>" class='text-black'><?= Yii::$app->params['orgName'] ?></a></b><br>
    All rights reserved
</div>
