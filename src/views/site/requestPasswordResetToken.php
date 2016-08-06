<?php

use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->blocks['bodyClass'] = 'login-page';
$this->title = Yii::t('adminlte', 'Request password reset');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="login-box-body">
    <p class="login-box-msg">Please fill out your email. A link to reset password will be sent there.</p>
    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'email')->textInput(['placeholder' => Yii::t('adminlte', 'Email'), 'class' => 'form-control', 'autofocus' => 'autofocus'])->label(false) ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    <?= Yii::t('adminlte', 'Send') ?>
                </button>
            </div>
        </div>
    <?php ActiveForm::end() ?>
</div>
