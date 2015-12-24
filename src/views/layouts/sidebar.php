<?php

use hipanel\widgets\Menu;
use yii\helpers\Url;

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
                <p><?= Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="<?= Url::to(['@domain/check-domain']) ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="domain-check" class="form-control" placeholder="<?= Yii::t('app', 'Check domain') ?>..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat">
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
