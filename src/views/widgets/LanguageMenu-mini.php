<?php

/** @var array $items */
use yii\helpers\Html;
use yii\helpers\Url;

$delimiter = '&nbsp;·&nbsp;';
$out = '';

?>
<?php if (is_array($items) && count($items)>1) : ?>
    <ul class="list-inline">
        <?php
        foreach ($items as $code => $item) {
            if ($out) {
                $out .= $delimiter;
            }
            if ($item['active']) {
                $out .= Html::tag('li', $item['label']);
            } else {
                $out .= Html::tag('li', Html::a($item['label'], $item['url']));
            }
        }
        echo $out;
        ?>
    </ul>
<?php endif ?>
