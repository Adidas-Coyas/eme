<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contatos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contatos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'telemovel')->textInput() ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput() ?>

    <?= $form->field($model, 'localizacao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descricao_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->dropDownList([ 'pt' => 'Pt', 'en' => 'En', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
