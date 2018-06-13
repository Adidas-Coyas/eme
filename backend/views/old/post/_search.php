<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchPost */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_pt') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'descricao_pt') ?>

    <?= $form->field($model, 'descricao_en') ?>

    <?php // echo $form->field($model, 'midea_pt') ?>

    <?php // echo $form->field($model, 'midea_en') ?>

    <?php // echo $form->field($model, 'anexo_pt') ?>

    <?php // echo $form->field($model, 'anexo_en') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
