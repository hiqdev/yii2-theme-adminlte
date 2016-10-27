<?php

/** @var array $languages */
/** @var string $language */
/** @var array|mixed $selectUrl */

use yii\helpers\Html;
use yii\helpers\Url;

$delimiter = '&nbsp;·&nbsp;';
$out = '';
?>
<?php if (is_array($languages)) : ?>
    <ul class="list-inline">
        <?php
        foreach ($languages as $code => $lang) {
            if (mb_stristr($language, $code)) {
                $out .= Html::tag('li', $lang);
            } else {
                $out .= Html::tag('li', Html::a($lang, Url::to(array_merge($selectUrl, ['language' => $code]))));
            }
            $out .= $delimiter;
        }
        print rtrim($out, $delimiter);
        ?>
    </ul>
<?php endif; ?>
