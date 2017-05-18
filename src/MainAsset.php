<?php
/**
 * AdminLte Theme for Yii2 projects
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\adminlte;

use hiqdev\assets\adminlte\AdminLteAsset;

class MainAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@hiqdev/themes/adminlte/assets';

    public $css = [
        'css/main.css',
        'css/menus.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        AdminLteAsset::class,
    ];
}
