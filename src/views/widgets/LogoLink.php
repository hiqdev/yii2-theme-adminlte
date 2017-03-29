<?php

use yii\helpers\Html;

?>
<?= Html::beginTag('a', array_merge($options, ['href' => $url, 'class' => 'logo'])) ?>
    <span class="logo-mini">
        <?= Html::img($smallImage, $smallImageOptions) ?>
    </span>
    <span class="logo-lg">
        <?= Html::img($image, $imageOptions) ?>
    </span>
<?= Html::endTag('a') ?>
