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
    <h1><?= Html::encode($widget->getText('header')) ?></h1>
    <p class="login-box-msg"><?= $widget->getText('message') ?></p>

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

        <div class="row">
            <?php if ($attribute = $widget->getBoolAttribute()) : ?>
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <?= $form->field($model, $attribute)->checkbox([
                            'label' => $model->getAttributeLabel($attribute),
                        ]) ?>
                    </div>
                </div>
                <?php $submitSize = 4 ?>
            <?php endif ?>
            <div class="col-xs-<?= $submitSize ?: 12 ?>">
                <button type="submit" class="btn btn-primary btn-block btn-flat"><?= $widget->getText('button') ?></button>
            </div>
        </div>
    <?php $form->end() ?>

    <?php if ($widget->isShown('social-login')) : ?>
        <?php $authAuthChoice = AuthChoice::begin([
            'baseAuthUrl' => ['auth'],
            'options' => ['class' => 'social-auth-links text-center'],
        ]) ?>
            <h4>--- &nbsp; <?= Yii::t('adminlte', 'OR SIGN IN WITH') ?> &nbsp; ---</h4>
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
            <br/>
            <?= Html::a($widget->getText($action), $widget->getPage($action)) ?>
        <?php endif ?>
    <?php endforeach ?>

</div>
