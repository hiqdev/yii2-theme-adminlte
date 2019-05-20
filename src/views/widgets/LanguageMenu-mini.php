<?php

use yii\helpers\Html;

$delimiter = '&nbsp;·&nbsp;';
$out = '';

/** @var array $items */

?>
<?php if (is_array($items) && count($items)>1) : ?>
    <ul class="list-inline">
        <?php foreach ($items as $code => $item) {
            if ($out) {
                $out .= $delimiter;
            }
            if ($item['active']) {
                $out .= Html::tag('li', $item['label']);
            } else {
                $out .= Html::tag('li', Html::a($item['label'], $item['url']));
            }
        } ?>
        <?= $out ?>
    </ul>
<?php endif ?>
