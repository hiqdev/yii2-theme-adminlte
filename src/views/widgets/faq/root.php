<?php

use yii\helpers\Html;

/** @var array $items */
/** @var \yii\web\View $this */
/** @var \hipanel\faq\widgets\Faq $this ->context */
$this->registerCss('
#faq .box.box-solid > .box-header a:hover {
    background: none;
}
');

?>
<div id="faq" class="nav-tabs-custom faq-categories">
    <ul class="nav nav-tabs">
        <?php foreach ($items as $tabId => $tab): ?>
            <li>
                <?= Html::a(sprintf('%s&nbsp;&nbsp;<span class="text-muted">(%d)</span>', $tab['label'], count($tab['items'])), '#tab-' . $tabId, ['data-toggle' => 'tab']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="tab-content">
        <?php foreach ($items as $tabId => $tab) : ?>
            <div class="tab-pane fade" id="<?= 'tab-' . $tabId ?>">
                <div id="<?= $tabId ?>" class="lpanel-group spacing-40">
                    <?php foreach ($tab['items'] as $itemId => $item) : ?>
                        <?= $this->render('node', ['item' => $item, 'itemId' => $itemId, 'parentId' => $tabId]) ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
