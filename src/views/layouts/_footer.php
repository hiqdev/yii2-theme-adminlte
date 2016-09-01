<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <?php if (Yii::$app->params['poweredByName']) : ?>
            Powered by <a href="<?= Yii::$app->params['poweredByUrl'] ?>"><?= Yii::$app->params['poweredByName'] ?></a>
            <?php if (Yii::$app->params['poweredByVersion']) : ?>
                version <?= Yii::$app->params['poweredByVersion'] ?>
            <?php endif ?>
        <?php endif ?>
    </div>
    <strong>&copy; <?= $this->render('//layouts/copyrightYears') ?> <?= Html::a(Yii::$app->params['orgName'], Yii::$app->params['orgUrl']) ?>.</strong> All rights reserved.
</footer>
