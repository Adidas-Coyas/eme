<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parceiros */

$this->title = 'Atualizar Parceiro: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Parceiros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="parceiros-update">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
    <h1>


</div>
