<?php

/*
 * HiPanel core package
 *
 * @link      https://hipanel.com/
 * @package   hipanel-core
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2016, HiQDev (http://hiqdev.com/)
 */

use cebe\gravatar\Gravatar;

if (Yii::$app->user->identity->email) {
    echo Gravatar::widget([
        'email'        => isset($email) ? $email : Yii::$app->user->identity->email,
        'defaultImage' => 'identicon',
        'options'      => [
            'alt'   => isset($alt) ? $alt : Yii::$app->user->identity->username,
            'class' => !isset($class) ? 'img-circle' : $class,
        ],
        'size'         => !isset($size) ? 25 : $size,
    ]);
}
