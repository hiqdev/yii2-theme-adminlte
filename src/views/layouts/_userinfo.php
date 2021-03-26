<?php

use yii\helpers\Html;

?>

<p><?= isset(Yii::$app->user->identity->name) ? Html::encode(Yii::$app->user->identity->name) : 'User Name' ?></p>
<a href="#">
    <i class="fa fa-circle text-success"></i>Online
</a>
