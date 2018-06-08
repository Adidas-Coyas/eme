<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'EME - Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="site-login">
    <h1><= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label(false) ?>

                <= $form->field($model, 'password')->passwordInput(['placeholder' => 'password'])->label(false) ?>

                <= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <php ActiveForm::end(); ?>
        </div>
    </div>
</div>
.-->


  <section id="content">
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?><!-- init form -->
     <h3>

         EME BackOffice
     </h3>

      <h1><?= Html::img('assets/sys/eme3.png', ['width' => '80', 'height' => '80']) ?></h1>
      <div class="form-group">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Nome do Usuario'])->label(false)->error(false) ?>
      </div>
      <div class="form-group">
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Senha'])->label(false)->error() ?>
      </div>
      <div class="form-group">
          <?= $form->field($model, 'rememberMe')->checkbox(['class' => ''])->label('Manter-me Ligado'); ?>
      </div>
      <div class="form-group">
        <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
      </div>
    <?php ActiveForm::end(); ?><!-- form -->
    <div class="button">
        <?= Html::a('Esqueceu a senha?', ['site/request-password-reset']); ?>
    </div><!-- button -->
  </section><!-- content -->
