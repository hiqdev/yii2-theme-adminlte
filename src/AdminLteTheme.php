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

use hiqdev\yii\compat\yii;
use yii\helpers\FileHelper;
use yii\helpers\Html;

/**
 * Class for this theme.
 * It's almost empty cause inheritance does all the tricks.
 */
class AdminLteTheme extends \hiqdev\thememanager\Theme
{
    public $label = 'AdminLte';

    protected array $images = [
        'favicon.ico' => [
            'rel' => 'shortcut icon',
        ],
        'favicon-32x32.png' => [
            'rel' => 'icon',
            'sizes' => '32x32',
        ],
        'android-chrome-192x192.png' => [
            'rel' => 'icon',
            'sizes' => '192x192',
        ],
        'apple-touch-icon-120x120.png' => [
            'rel' => 'apple-touch-icon',
            'sizes' => '120x120',
        ],
    ];

    public function favicon(): string
    {
        foreach ($this->images as $favicon => $params) {
            $param = yii::getApp()->params[$favicon] ?? null;
            if (empty($param)) {
                continue;
            }
            $path = yii::getAlias($param);
            $mimeType = FileHelper::getMimeTypeByExtension($path);
            $publishedPath = yii::getApp()->assetManager->publish($path);
            $url = $publishedPath[1];
            $tags[] = Html::tag('link', null, array_merge($params, ['type' => $mimeType, 'href' => $url]));
        }

        return implode("\n", $tags ?? []);
    }
}
