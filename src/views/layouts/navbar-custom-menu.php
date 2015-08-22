<?php

use \yii\helpers\Html;
use yii\helpers\Url;

?>

<ul class="nav navbar-nav">
    <!-- Messages: style can be found in dropdown.less-->
    <?php /*
    <li class="dropdown messages-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li><!-- start message -->
                        <a href="#">
                            <div class="pull-left">
                                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                            </div>
                            <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                        </a>
                    </li><!-- end message -->
                </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
        </ul>
    </li>
    */ ?>
    <!-- Notifications: style can be found in dropdown.less -->
    <li class="dropdown language-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= strtoupper(substr(Yii::$app->language, 0, 2)) ?>
        </a>
        <ul class="dropdown-menu">
            <li class="header"><?= Html::a(Yii::t('app', 'English'), Url::current(['language' => 'en']), ['class' => mb_stristr(Yii::$app->language, 'en') ? 'text-bold' : '']) ?></li>
            <li class="header"><?= Html::a(Yii::t('app', 'Russian'), Url::current(['language' => 'ru']), ['class' => mb_stristr(Yii::$app->language, 'ru') ? 'text-bold' : '']) ?></li>
        </ul>
    </li>
    <?php /*
    <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                    </li>
                </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
        </ul>
    </li>
    <!-- Tasks: style can be found in dropdown.less -->
    <li class="dropdown tasks-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">9</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li><!-- Task item -->
                        <a href="#">
                            <h3>
                                Design some buttons
                                <small class="pull-right">20%</small>
                            </h3>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li><!-- end task item -->
                </ul>
            </li>
            <li class="footer">
                <a href="#">View all tasks</a>
            </li>
        </ul>
    </li>
    */ ?>
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $this->render('//layouts/gravatar', ['class' => 'user-image']); ?>
            <span class="hidden-xs"><?= \Yii::$app->user->identity->username; ?></span>
        </a>
        <?= $this->render('//layouts/user-menu') ?>
    </li>
</ul>
