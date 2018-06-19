<?php
/**
 * Created by PhpStorm.
 * User: coyas
 * Date: 6/15/18
 * Time: 6:16 AM
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="comentario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($comentario, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($comentario, 'comentario')->textarea(['rows' => 3])->label('Comentar') ?>

    <?php // $form->field($comentario, 'created_at')->textInput() ?>

    <?php // $form->field($comentario, 'updated_at')->textInput() ?>

    <?php // $form->field($comentario, 'respondeu')->textInput() ?>

    <?php // $form->field($comentario, 'id_post')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>