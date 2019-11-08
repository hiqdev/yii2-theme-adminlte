<?php

use hipanel\widgets\Banner;
use hiqdev\thememanager\menus\AbstractSidebarMenu;
use yii\helpers\Url;

$this->registerCss('
.user-panel > .image img {
    width: 100%;
    max-width: 45px;
    height: auto;
}
');

?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <a href="<?= Url::toRoute(['/site/profile']) ?>">
                    <?= $this->render('//layouts/gravatar', [
                        'email' => Yii::$app->user->identity->email ?? null,
                        'size'  => 45,
                    ]) ?>
                </a>
            </div>
            <div class="pull-left info">
                <?= $this->render('//layouts/_userinfo') ?>
            </div>
        </div>
        <?= AbstractSidebarMenu::widget() ?>
        <?= Banner::widget() ?>
    </section>
</aside>
