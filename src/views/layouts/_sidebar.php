<?php

use hipanel\modules\client\models\Client;
use yii\helpers\Url;

$client = Client::findOne(Yii::$app->user->identity->id);

if ($client->balance > 0) {
    $balanceColor = 'text-success';
} elseif ($client->balance < 0) {
    $balanceColor = 'text-danger';
} else {
    $balanceColor = 'text-muted';
}

?>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= $this->render('//layouts/gravatar', ['size' => 45]) ?>
            </div>
            <div class="pull-left info">
                <a href="<?= Yii::$app->user->can('deposit') ? Url::to('@pay/deposit') : '#' ?>">
                    <i class="fa fa-circle <?= $balanceColor ?>"></i> <?= Yii::t('adminlte', 'Balance: {balance}', ['balance' => Yii::$app->formatter->asCurrency($client->balance, 'USD')]) ?>
                </a>
                <?php if ($client->credit > 0) : ?>
                    <br />
                    <a href="<?= Yii::$app->user->can('deposit') ? Url::to('@pay/deposit') : '#' ?>">
                        <i class="fa fa-circle"></i> <?= Yii::t('adminlte', 'Credit: {credit}', ['credit' => Yii::$app->formatter->asCurrency($client->credit, 'USD')]) ?>
                    </a>
                <?php endif ?>
            </div>
        </div>

        <?php if (Yii::getAlias('@domainchecker', false)) : ?>
            <?php $searchUrl = Yii::getAlias('@domainchecker', false) ? Url::to('@domainchecker/check-domain') : '/' ?>
            <form action="<?= $searchUrl ?>" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="domain" class="form-control" placeholder="<?= Yii::t('adminlte', 'Check domain') ?>..."/>
                    <span class="input-group-btn">
                        <button type='submit' id='search-btn' class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        <?php endif ?>

        <?= Yii::$app->menuManager->render('sidebar') ?>

    </section>
</aside>
