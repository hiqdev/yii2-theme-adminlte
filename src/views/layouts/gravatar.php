<?php

/*
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

use cebe\gravatar\Gravatar;

if (empty($email) && isset(Yii::$app->user->identity->email)) {
    $email = Yii::$app->user->identity->email;
}

echo Gravatar::widget([
    'email'        => $email,
    'defaultImage' => 'identicon',
    'options'      => [
        'alt'   => isset($alt) ? $alt : Yii::$app->user->identity->username,
        'class' => !isset($class) ? 'img-circle' : $class,
    ],
    'size'         => !isset($size) ? 25 : $size,
]);
