<?php

use vintage\recaptcha\widgets\InvisibleRecaptcha;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var yii\base\Model $model */
/** @var yii\base\Widget $widget */
$this->registerCss(<<<'CSS'
    .social-button-login > a:nth-child(n+3){
        display:none;
    }
    .social-button-login:hover > a:nth-child(n+1) {
        display:block;
    }
CSS
);

$this->blocks['bodyClass'] = 'login-page';
$this->registerCss(<<<'CSS'
    .checkbox label {
        padding-left: 0px;
    }
    .checkboxes label {
        text-indent: -25px;
        padding-left: 25px;
    }
CSS
);

?>

<div class="login-box-body">
    <?php if ($widget->getText('header')) : ?>
        <h1 class="text-center"><?= Html::encode($widget->getText('header')) ?></h1>
    <?php endif ?>

    <?php $message = $widget->getText('message') ?>
    <?php if (strpos($message, '<') === false) : ?>
        <p class="login-box-msg"><?= $message ?></p>
    <?php else: ?>
        <?= $message ?>
    <?php endif ?>

    <?php $form = ActiveForm::begin($widget->options) ?>
        <?php foreach ($widget->getTextAttributes() as $attribute) : ?>
            <div class="form-group has-feedback">
                <?= $form->field($model, $attribute)->input($widget->detectInputType($attribute), [
                    'placeholder' => $model->getAttributeLabel($attribute),
                    'class' => 'form-control',
                    'autofocus' => empty($model->{$attribute}) ? 'autofocus' : false,
                ])->label(false) ?>
                <span class="fa fa-<?= $widget->detectInputIcon($attribute) ?> form-control-feedback"></span>
            </div>
        <?php endforeach ?>

        <?php if (!empty($widget->isCaptchaRequired) && $widget->isCaptchaRequired): ?>
            <div class="form-group">
                <?= InvisibleRecaptcha::widget([
                    'formSelector' => '#' . ($widget->options['id'] ?? 'form'),
                ]) ?>
            </div>
        <?php endif ?>

        <div class="row checkboxes">
            <?php foreach ($widget->getBoolAttributes() as $attribute) : ?>
                <div class="col-xs-12">
                    <div>
                        <?= $form->field($model, $attribute)->checkbox([
                            'label' => $model->getAttributeLabel($attribute),
                            'class' => 'option-input',
                        ]) ?>
                    </div>
                </div>
                <?php $submitSize = 4 ?>
            <?php endforeach; ?>
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block"><?= $widget->getText('button') ?></button>
            </div>
        </div>
    <?php $form->end() ?>

    <?php if ($widget->isShown('social-login')) : ?>
        <?php $authAuthChoice = AuthChoice::begin([
            'baseAuthUrl' => ['auth'],
            'options' => ['class' => 'social-auth-links text-center'],
        ]) ?>
        <?php $authClients = $authAuthChoice->getClients() ?>
        <?php if (!empty($authClients)) : ?>
            <h4>--- &nbsp; <?= Yii::t('adminlte', 'OR') ?> &nbsp; ---</h4>
            <div class="social-button-login">
                <div class="row">
                    <?php foreach ($authClients as $name => $client): ?>
                        <div class="col-md-12 col-xs-12" style="margin-bottom: 0.5em">
                            <?php $letter = $name === 'yandex' ? 'Я' : '' ?>
                            <?php $class  = $name === 'live' ? 'windows' : $name ?>
                            <?php $signin = Yii::t('adminlte', 'Sign in using') ?>

                            <?php $text = sprintf('%s <i class="%s">%s</i>&nbsp;%s', $signin, "fa fa-$class", $letter, $client->getTitle()) ?>

                            <?= $authAuthChoice->clientLink($client, $text, ['class' => "btn btn-block btn-social btn-$class"]) ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <?php AuthChoice::end() ?>
        <?php endif ?>
    <?php endif ?>

    <div style="margin-top: 20px">
        <?php foreach ([
                           'restore-password' => 'btn-default', 'signup' => 'btn-primary', 'login' => 'btn-default',
                       ] as $action => $css) : ?>
            <?php if ($widget->isShown($action)) : ?>
                <?= Html::a($widget->getText($action), $widget->getPage($action), ['class' => 'btn btn-block ' . $css]) ?>
            <?php endif ?>
        <?php endforeach ?>
    </div>

</div>
