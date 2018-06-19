<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projetos */

$this->title = 'Atualizar Projeto: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Projetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="projetos-update">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>



</div>
