<?php

/** @var array $languages */
/** @var array|mixed $selectUrl */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php
if (is_array($languages)) : ?>
    <ul class="list-inline">
        <?php foreach ($languages as $code => $language) : ?>
            <?= Html::beginTag('li') ?>
            <?= Html::a($language, Url::to(array_merge($selectUrl, ['language' => $code])), ['class' => mb_stristr($language, $code) ? 'text-bold' : '']) ?>
            <?= Html::endTag('li') ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
