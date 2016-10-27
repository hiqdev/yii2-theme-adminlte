<?php

/** @var array $languages */
/** @var array|mixed $selectUrl */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php if (is_array($languages)) : ?>
    <ul class="list-inline">
        <?php foreach ($languages as $code => $lang) : ?>
            <li>
                <?php if (mb_stristr($language, $code)) : ?>
                    <?= $lang ?>
                <?php else : ?>
                    <?= Html::a($lang, Url::to(array_merge($selectUrl, ['language' => $code]))) ?>
                <?php endif ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
