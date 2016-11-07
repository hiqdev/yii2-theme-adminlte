<?php

namespace hiqdev\themes\adminlte;

use hiqdev\assets\icheck\iCheckAsset;
use yii\web\AssetBundle;

class MiniAsset extends AssetBundle
{
    public $sourcePath = '@hiqdev/themes/adminlte/assets';

    public $css = [
        'css/mini.css',
    ];

    public $js = [
        '//use.fontawesome.com/c66be52008.js'
    ];

    public $depends = [
        MainAsset::class,
        iCheckAsset::class,
    ];
}
