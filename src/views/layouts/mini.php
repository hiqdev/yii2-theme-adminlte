<?php

/**
 * Theme main layout.
 *
 * @var frontend\components\View View
 * @var string $content Content
 */
use hiqdev\pnotify\Alert;
use yii\helpers\Html;

$this->registerJs(<<<'JS'
$(function () {
    $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
JS
, \yii\web\View::POS_READY);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->

<?php if (isset($this->blocks['bodyClass'])) : ?>
    <?= '<body class="' . $this->blocks['bodyClass'] . '">'; ?>
<?php else : ?>
<body>
<?php endif ?>

<?php $this->beginBody(); ?>
<body class="login-page">

<?= Alert::widget() ?>

<div class="login-box">
    <div class="login-logo">
        <b><?= Html::a(Yii::$app->params['orgName'], ['/']) ?></b>
    </div>
    <!-- /.login-logo -->
    <?= $content; ?>
</div>
<!-- /.login-box -->

<div style="position:fixed;bottom:0;width:100%">
    <div class="text-center small">
        <?php if (Yii::$app->params['poweredByName']) : ?>
            Powered by <a href="<?= Yii::$app->params['poweredByUrl'] ?>"><?= Yii::$app->params['poweredByName'] ?></a>
            <?php if (Yii::$app->params['poweredByVersion']) : ?>
                version <?= Yii::$app->params['poweredByVersion'] ?>
            <?php endif ?>
        <?php endif ?>
    </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
