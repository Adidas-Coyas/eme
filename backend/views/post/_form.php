<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'title_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao_pt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descricao_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'midea_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'midea_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anexo_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anexo_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
