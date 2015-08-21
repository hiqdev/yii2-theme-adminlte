<?php

/*
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\themes\adminlte;

/**
 * Class for this theme.
 * It's empty cause inheritance does all the tricks.
 */
class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'AdminLte';

    public $assets = [
        'hiqdev\assets\adminlte\AdminLteAsset',
    ];
}
