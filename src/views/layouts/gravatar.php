<?php
/**
 * AdminLte Theme for Yii2 projects
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

use cebe\gravatar\Gravatar;

echo Gravatar::widget([
    'email'        => empty($email) ? Yii::$app->user->identity->email : $email,
    'defaultImage' => 'identicon',
    'options'      => [
        'alt'   => empty($alt) ? Yii::$app->user->identity->username : $alt,
        'class' => empty($class) ? 'img-circle' : $class,
    ],
    'size'         => empty($size) ? 25 : $size,
]);
