<?php

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
CSS
);
?>

<div class="login-box-body">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="login-box-msg"><?= $widget->message ?></p>

    <?php $form = ActiveForm::begin(['id' => 'login-form']) ?>
        <?php if ($model->isAttributeActive('username')) : ?>
            <div class="form-group has-feedback">
                <?= $form->field($model, 'username')->textInput([
                    'placeholder' => Yii::t('adminlte', 'Login or Email'),
                    'class' => 'form-control',
                    'autofocus' => empty($model->username) ? 'autofocus' : false,
                ])->label(false) ?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
        <?php endif ?>
        <?php if ($model->isAttributeActive('email')) : ?>
            <div class="form-group has-feedback">
                <?= $form->field($model, 'email')->textInput([
                    'placeholder' => 'Email',
                    'class' => 'form-control',
                    'autofocus' => empty($model->email) ? 'autofocus' : false,
                ])->label(false) ?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
        <?php endif ?>
        <?php if ($model->isAttributeActive('password')) : ?>
            <div class="form-group has-feedback">
                <?= $form->field($model, 'password')->passwordInput([
                    'placeholder' => Yii::t('adminlte', 'Password'),
                    'class' => 'form-control',
                    'autofocus' => (empty($model->password) && !empty($model->username)) ? 'autofocus' : false,
                ])->label(false) ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
        <?php endif ?>
        <?php if ($model->isAttributeActive('password_retype')) : ?>
            <div class="form-group has-feedback">
                <?= $form->field($model, 'password_retype')->passwordInput([
                    'placeholder' => Yii::t('adminlte', 'Retype password'),
                    'class' => 'form-control'
                ])->label(false) ?>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
        <?php endif ?>
        <div class="row">
            <?php $submitSize = 12 ?>
            <?php if ($model->isAttributeActive('rememberMe')) : ?>
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <?= $form->field($model, 'rememberMe')->checkbox([])->label(false) ?>
                    </div>
                </div>
                <?php $submitSize = 4 ?>
            <?php endif ?>
            <div class="col-xs-<?= $submitSize ?>">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><?= $this->title ?></button>
            </div>
        </div>
    <?php $form->end() ?>

    <?php if ($widget->isShown('social-login')) : ?>
        <?php $authAuthChoice = AuthChoice::begin([
            'baseAuthUrl' => ['auth'],
            'options' => ['class' => 'social-auth-links text-center'],
        ]) ?>
            <p>-- <?= Yii::t('adminlte', 'OR SIGN IN WITH') ?> --</p>
            <div class="social-button-login">
                <div class="row">
                <?php foreach ($authAuthChoice->getClients() as $name => $client): ?>
                    <div class="col-md-6 col-xs-12" style="margin-bottom: 0.5em">
                        <?php $letter = $name==='yandex' ? 'Я' : '' ?>
                        <?php $class = $name==='live' ? 'windows' : $name ?>
                        <?php $text = sprintf('<i class="%s">%s</i>&nbsp;%s', "fa fa-$class", $letter, $client->getTitle()) ?>
                        <?= $authAuthChoice->clientLink($client, $text, ['class' => "btn btn-block btn-social btn-$class"]) ?>
                    </div>
                <?php endforeach ?>
                </div>
            </div>
        <?php AuthChoice::end() ?>
    <?php endif ?>

    <?php foreach (['restore-password', 'signup', 'login'] as $action) : ?>
        <?php if ($widget->isShown($action)) : ?>
            <?= Html::a($widget->getText($action), $widget->getPage($action)) ?>
            <br/>
        <?php endif ?>
    <?php endforeach ?>

</div>
