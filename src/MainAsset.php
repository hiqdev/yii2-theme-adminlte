<?php

/*
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\adminlte;

use hiqdev\assets\adminlte\AdminLteAsset;

class MainAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hiqdev/themes/adminlte/assets';

    public $css = [
        'css/main.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        AdminLteAsset::class,
    ];
}