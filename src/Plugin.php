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

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * {@inheritdoc}
     */
    protected $_items = [
        'themes' => [
            'adminlte' => [
                'class' => 'hiqdev\themes\adminlte\AdminLteTheme',
            ],
        ],
    ];
}
