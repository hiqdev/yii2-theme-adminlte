<?php

/*
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
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
                    'basePath' => '@hipanel/themes/adminlte/messages',
                    'fileMap' => [
                        'adminlte' => 'adminlte.php',
                    ],
                ],
            ],
        ],
    ],
];
