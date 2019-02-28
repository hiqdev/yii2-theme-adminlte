<?php
/**
 * Server module for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-server
 * @package   hipanel-module-server
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\adminlte\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class SidebarOpener extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@hiqdev/themes/adminlte/assets';

    /**
     * @var array
     */
    public $js = [
        'js/sidebarOpener.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
