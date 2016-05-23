<?php

if (isset(Yii::$app->params['copyrightYears'])) {
    $years = Yii::$app->params['copyrightYears'];
} elseif (isset(Yii::$app->params['copyrightYear'])) {
    $years = Yii::$app->params['copyrightYear'] . '-' . date('Y');
}

echo isset($years) ? $years : date('Y');
