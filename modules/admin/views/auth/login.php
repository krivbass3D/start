<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<img src="../../img/fon.png" class="bg">
<div class="login-box">
    <div class="login-logo">
        <a href="<?= \yii\helpers\Url::home()?>">
            <img src="../../img/LogoGAS.png" class="align-top logoGas" alt="" style="height:174px;">
        </a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Увійдіть, щоб розпочати сеанс</p>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"glyphicon glyphicon-user form-control-feedback\"></span><div>{error}</div></div>",])->textInput(['placeholder' => 'Login']) ?>

        <?= $form->field($model, 'password', ['template' => "<div class='form-group has-feedback'> {input} <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span><div>{error}</div></div>",])->passwordInput(['placeholder' => 'Password']) ?>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox2">
                    <!--<input type="checkbox"> Запам'ятати мене-->
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "{label} {input}"
                    ]) ?>
                </div>
            </div>

            <div class="col-xs-4">
                <?= Html::submitButton('Вхід', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->