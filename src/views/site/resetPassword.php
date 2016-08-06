<?php

use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

$this->title = Yii::t('adminlte', 'Reset password');
$this->blocks['bodyClass'] = 'register-page';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="register-box-body">
    <p class="login-box-msg"><?= Yii::t('adminlte', 'Please choose your new password') ?>:</p>

    <?php $form = ActiveForm::begin(['id' => 'form-signup']) ?>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password', 'autofocus' => true, 'class' => 'form-control'])->label(false) ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'password_retype')->passwordInput(['placeholder' => 'Retype password', 'class' => 'form-control'])->label(false) ?>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><?= $this->title ?></button>
            </div><!-- /.col -->
        </div>
    <?php ActiveForm::end(); ?>
</div><!-- /.register-box-body -->
