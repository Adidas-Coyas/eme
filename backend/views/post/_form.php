<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!-- $form->field($model, 'id')->textInput() ?-->

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anexo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'publicar')->textInput() ?>

    <?php // $form->field($model, 'publicado_at')->textInput() ?>

    <?php // $form->field($model, 'id_user')->textInput() ?>


    <?= $form->field($model, 'lang')->dropDownList([ 'pt' => 'Português', 'en' => 'Ingles', ], ['prompt' => 'Escolha linguagem...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
