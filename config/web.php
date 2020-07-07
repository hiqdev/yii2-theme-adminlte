<?php
/**
 * AdminLte Theme for Yii2 projects
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'adminlte' => [
                'class' => \hiqdev\themes\adminlte\AdminLteTheme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'adminlte' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => dirname(__DIR__) . '/src/messages',
                    'fileMap' => [
                        'adminlte' => 'adminlte.php',
                    ],
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\widgets\SidebarMenu::class => [
                'class' => \hiqdev\themes\adminlte\widgets\SidebarMenu::class,
            ],
        ],
    ],
];
