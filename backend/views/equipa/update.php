<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Equipa */

$this->title = 'Atualizar Equipa';
$this->params['breadcrumbs'][] = ['label' => 'Equipas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = "Atualização de ".$model->nome;
?>
<div class="equipa-update">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>


</div>
