<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Galeria */

$this->title = 'Adicionar conteúdo';
$this->params['breadcrumbs'][] = ['label' => 'Galeria', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="galeria-create">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>


</div>
