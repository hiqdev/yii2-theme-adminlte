<?php

use hiqdev\assets\pictonic\PictonicAsset;
use yii\authclient\widgets\AuthChoice;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

PictonicAsset::register($this);
$this->registerCss(<<<'CSS'
    .social-button-login > a:nth-child(n+3){
        display:none;
    }
    .social-button-login:hover > a:nth-child(n+1) {
        display:block;
    }
CSS
);

// Social Pictonic associative
$buttonOptions = [
    'facebook' => [
        'icon' => 'icon-facebook',
    ],
    'google' => [
        'icon' => 'icon-google',
    ],
    'github' => [
        'icon' => 'icon-github-01',
    ],
    'linkedin' => [
        'icon' => 'icon-linkedin',
    ],
    'vk' => [
        'icon' => 'icon-rus-vk-02',
    ],
    'yandex' => [
        'icon' => 'icon-rus-yandex-01',
    ],
    'windows' => [
        'icon' => 'fa fa-windows',
    ],
];

$this->blocks['bodyClass'] = 'login-page';
$this->title = Yii::t('app', 'Sign in');
$this->registerCss(<<<'CSS'
    .checkbox label {
        padding-left: 0px;
    }
CSS
);
?>

<div class="login-box-body">
    <p class="login-box-msg"><?= Yii::t('app', 'Sign in to start your session') ?></p>
    <?php $form = ActiveForm::begin(['id' => 'login-form']) ?>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'username')->textInput([
                    'placeholder' => Yii::t('app', 'Login or Email'),
                    'class' => 'form-control',
                    'autofocus' => empty($model->username) ? 'autofocus' : false,
            ])->label(false) ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'password')->passwordInput([
                    'placeholder' => Yii::t('app', 'Password'),
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
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><?= Yii::t('app', 'Sign In') ?></button>
            </div><!-- /.col -->
        </div>
    <?php $form->end() ?>

    <?php $authAuthChoice = AuthChoice::begin([
        'baseAuthUrl' => ['auth'],
        'options' => ['class' => 'social-auth-links text-center'],
    ]) ?>
        <p>-- <?= Yii::t('app', 'OR SIGN IN WITH') ?> --</p>
    <div class="social-button-login">
        <div class="row">
        <?php foreach ($authAuthChoice->getClients() as $name => $client): ?>
            <div class="col-md-6 col-xs-12" style="margin-bottom: 0.5em">
            <?php $text = sprintf("<i class='%s'></i>&nbsp;%s", $buttonOptions[$name]['icon'], $client->getTitle()); ?>
            <?php $authAuthChoice->clientLink($client, $text, ['class' => "btn btn-block btn-social btn-$name"]) ?>
            </div>
        <?php endforeach ?>
        </div>
    </div>
    <?php AuthChoice::end() ?>

    <?= Html::a(Yii::t('app', 'I forgot my password'),      Yii::$app->params['passwordResetPage'] ?: ['request-password-reset', 'username' => $model->username]) ?><br>
    <?= Html::a(Yii::t('app', 'Register a new membership'), Yii::$app->params['signupPage'] ?: ['signup']) ?>

</div><!-- /.login-box-body -->
