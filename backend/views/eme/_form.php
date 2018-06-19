<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Eme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sobre')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'missao')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'lang')->dropDownList([ 'pt' => 'Pt', 'en' => 'En', ], ['prompt' => 'Escolha a linguagem']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
