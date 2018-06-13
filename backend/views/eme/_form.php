<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Eme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sobre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'missao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lang')->dropDownList([ 'pt' => 'Pt', 'en' => 'En', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
