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

use hipanel\assets\FontAwesome;
use yii\web\AssetBundle;

class MiniAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/mini.css',
    ];

    public $js = [
//        'https://use.fontawesome.com/c66be52008.js',
    ];

    public $depends = [
//        CheckboxStyleAsset::class,
//        FontAwesome::class,
//        MainAsset::class,
    ];
}
