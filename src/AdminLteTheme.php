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

    public function favicon(): string
    {
        $path = yii::getAlias(yii::getApp()->params['favicon.ico']);
        $mimeType = FileHelper::getMimeTypeByExtension($path);
        $publishedPath = yii::getApp()->assetManager->publish($path);
        $url = $publishedPath[1];

        return Html::tag('link', null, ['rel' => 'shortcut icon', 'type' => $mimeType, 'href' => $url]);
    }
}
