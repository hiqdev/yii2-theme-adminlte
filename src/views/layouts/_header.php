<?php

use hiqdev\thememanager\menus\AbstractNavbarMenu;
use hiqdev\thememanager\widgets\LogoLink;

?>

<!-- The Right Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="control-sidebar-content" style="padding: 0 1rem;">
        <p class="text-center" style="padding-top: 3rem;">
            <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
        </p>
    </div>
</aside>

<!-- The sidebar's background -->
<!-- This div must placed right after the sidebar for it to work-->
<div class="control-sidebar-bg"></div>

<!-- header logo: style can be found in header.less -->
<header class="main-header">
    <?= LogoLink::widget() ?>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <?= AbstractNavbarMenu::widget([], [
               'options' => [
                   'class' => 'nav navbar-nav',
               ],
            ]) ?>
        </div>
    </nav>
</header>
