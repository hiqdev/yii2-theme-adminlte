<?php

use yii\helpers\Html;

?>
<?= Html::beginTag('a', array_merge($options, ['href' => $url, 'class' => 'logo'])) ?>
    <?php if (empty($image)) : ?>
        <span class="logo-text"><?= $name ?></span>
    <?php else : ?>
        <?php if ($smallImage) : ?>
            <span class="logo-mini">
                <?= Html::img($smallImage, $smallImageOptions) ?>
            </span>
        <?php endif ?>
        <?php if ($image) : ?>
            <span class="logo-lg">
                <?= Html::img($image, $imageOptions) ?>
            </span>
        <?php endif ?>
    <?php endif ?>
<?= Html::endTag('a') ?>
