<?php

$this->blocks['bodyClass'] = 'login-page';
$this->title = 'Recovery';
?>

<div class="login-box-body">
    <p class="login-box-msg">Yii::t('app', 'Password Recovery')</p>
    <form action="../../index2.html" method="post">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
            </div><!-- /.col -->
        </div>
    </form>
</div><!-- /.login-box-body -->
