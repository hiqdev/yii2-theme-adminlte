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
use yii\bootstrap\BootstrapPluginAsset;

class MainAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/main.css',
        'css/menus.css',
    ];

    public $depends = [
        BootstrapPluginAsset::class,
        AdminLteAsset::class,
    ];
}
