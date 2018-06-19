<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Testimunhos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimunhos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'foto')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?= $form->field($model, 'lang')->dropDownList([ 'pt' => 'Portugues', 'en' => 'Ingles', ], ['prompt' => 'Escolher a lingua']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
