<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testimunhos */

$this->title = 'Create Testimunhos';
$this->params['breadcrumbs'][] = ['label' => 'Testimunhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimunhos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
