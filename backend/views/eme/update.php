<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Eme */

$this->title = 'Update Eme: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Emes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
