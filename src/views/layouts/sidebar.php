<?php

use hipanel\modules\client\models\Client;
use hipanel\widgets\Menu;
use yii\helpers\Url;

$userBalance = Client::findOne(Yii::$app->user->identity->id)->balance;
$balanceColor = '';
switch ($userBalance) {
    case $userBalance > 0:
        $balanceColor = 'text-success';
        break;
    case $userBalance < 0:
        $balanceColor = 'text-danger';
        break;
    case $userBalance === 0:
        $balanceColor = 'text-muted';
        break;
}
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= $this->render('//layouts/gravatar', ['size' => 45]); ?>
            </div>
            <div class="pull-left info">
                <p>
                    <?= Yii::$app->user->identity->username ?>
                    <?php if (Yii::$app->user->can('support') && Yii::$app->user->identity->seller !== null) : ?>
                        <?= ' / ' . Yii::$app->user->identity->seller ?>
                    <?php endif ?>
                </p>
                <a href="<?= Url::to('@pay/deposit') ?>">
                    <i class="fa fa-circle <?= $balanceColor ?>"></i> <?= Yii::t('app', 'Balance') . ': ' ?><?= Yii::$app->formatter->asCurrency($userBalance, 'USD') ?>
                </a>
            </div>
        </div>
        <!-- search form -->
        <?php $searchUrl = Yii::getAlias('@domain', false) ? Url::to('@domain/check-domain') : '/' ?>
        <form action="<?= $searchUrl ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="Domain[domain]" class="form-control" placeholder="<?= Yii::t('app', 'Check domain') ?>..."/>
                <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?= Menu::widget([
            'options' => [
                'class' => 'sidebar-menu',
            ],
            'items' => Yii::$app->menuManager->sidebar->getItems(),
        ]) ?>
    </section>
    <!-- /.sidebar -->
</aside>
