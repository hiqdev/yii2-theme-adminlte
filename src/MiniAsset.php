<?php

namespace hiqdev\themes\adminlte;

use yii\web\AssetBundle;

class MiniAsset extends AssetBundle
{
    public $sourcePath = '@hiqdev/themes/adminlte/assets';

    public $css = [
        'css/mini.css',
    ];

    public $depends = [
        MainAsset::class,
    ];
}
