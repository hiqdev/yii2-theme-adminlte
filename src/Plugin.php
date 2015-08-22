<?php

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
