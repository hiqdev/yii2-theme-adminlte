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

use Yii;
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
        $icon = Yii::getAlias(Yii::$app->params['favicon.ico']);
        $mimeType = FileHelper::getMimeType($icon);

        return Html::tag('link', null, ['rel' => 'shortcut icon', 'type' => $mimeType, 'href' => Yii::$app->assetManager->getPublishedUrl($icon)]);
    }
}
