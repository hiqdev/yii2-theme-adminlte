<?php

use hiqdev\thememanager\menus\AbstractSidebarMenu;

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
                <?= $this->render('//layouts/_userinfo') ?>
            </div>
        </div>
        <?= AbstractSidebarMenu::create()->render() ?>
    </section>
</aside>
