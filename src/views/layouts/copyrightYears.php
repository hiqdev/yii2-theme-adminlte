<?php

/*
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

if (isset(Yii::$app->params['copyrightYears'])) {
    $years = Yii::$app->params['copyrightYears'];
} elseif (isset(Yii::$app->params['copyrightYear'])) {
    $years = Yii::$app->params['copyrightYear'] . '-' . date('Y');
}

echo isset($years) ? $years : date('Y');
