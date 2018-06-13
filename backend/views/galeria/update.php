<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Galeria */

$this->title = 'Atualizar Galeria';
$this->params['breadcrumbs'][] = ['label' => 'Galeria', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['title'] = 'Atualizar ' . $model->title;
?>
<div class="galeria-update">

    <div class="col-md-10 col-md-offset-1">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
