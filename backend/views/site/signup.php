<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel-heading main-color-bg">
    <h3 class="panel-title" align="center"><?= $this->title ?></h3>
</div>
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary btn-block', 'name' => 'signup-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>