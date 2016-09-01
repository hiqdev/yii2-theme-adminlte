<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <?php if (Yii::$app->params['poweredByName']) : ?>
            Powered by <a href="<?= Yii::$app->params['poweredByUrl'] ?>"><?= Yii::$app->params['poweredByName'] ?></a>
            <?php if (Yii::$app->params['poweredByVersion']) : ?>
                version <?= Yii::$app->params['poweredByVersion'] ?>
            <?php endif ?>
        <?php endif ?>
    </div>
    <strong>
        &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>.
    </strong> All rights reserved.
</footer>
