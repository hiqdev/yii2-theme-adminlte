<?php

use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */
/** @var LoginForm $model */

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
$this->title = Yii::t('adminlte', 'Sign in');
$this->registerCss(<<<'CSS'
    .checkbox label {
        padding-left: 0px;
    }
CSS
);
?>

<div class="login-box-body">
    <p class="login-box-msg"><?= Yii::t('adminlte', 'Sign in to start your session') ?></p>
    <?php $form = ActiveForm::begin(['id' => 'login-form']) ?>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'username')->textInput([
                    'placeholder' => Yii::t('adminlte', 'Login or Email'),
                    'class' => 'form-control',
                    'autofocus' => empty($model->username) ? 'autofocus' : false,
            ])->label(false) ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'password')->passwordInput([
                    'placeholder' => Yii::t('adminlte', 'Password'),
                    'class' => 'form-control',
                    'autofocus' => (empty($model->password) && !empty($model->username)) ? 'autofocus' : false,
            ])->label(false) ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <?= $form->field($model, 'rememberMe')->checkbox([])->label(false) ?>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><?= Yii::t('adminlte', 'Sign in') ?></button>
            </div>
        </div>
    <?php $form->end() ?>

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

    <? if ($restorePasswordPage) : ?>
        <?= Html::a(Yii::t('adminlte', 'I forgot my password'), $restorePasswordPage) ?>
        <br/>
    <? endif ?>

    <? if ($signupPage) : ?>
        <?= Html::a(Yii::t('adminlte', 'Register a new membership'), $signupPage) ?>
    <? endif ?>

</div>
