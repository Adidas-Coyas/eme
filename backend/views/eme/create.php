<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Eme */

$this->title = 'Create Eme';
$this->params['breadcrumbs'][] = ['label' => 'Emes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
