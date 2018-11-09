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

use hipanel\assets\CheckboxStyleAsset;
use yii\web\AssetBundle;

class MiniAsset extends AssetBundle
{
    public $sourcePath = '@hiqdev/themes/adminlte/assets';

    public $css = [
        'css/mini.css',
    ];

    public $js = [
        '//use.fontawesome.com/c66be52008.js',
    ];

    public $depends = [
        MainAsset::class,
        CheckboxStyleAsset::class,
    ];
}
