<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="site-request-password-reset">
-->


<div class="panel-heading main-color-bg">
    <h3 class="panel-title" align="center"><?= $this->title ?></h3>
</div>
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'reCaptcha')->widget(
            \himiklab\yii2\recaptcha\ReCaptcha::className(),
            ['siteKey' => '6Lc_8VsUAAAAACyybDFclJVhgNx27EEqJtaV7hcY']
        ) ?>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
