<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contatos */

$this->title = 'Adicionar Contatos';
$this->params['breadcrumbs'][] = ['label' => 'Contatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['title'] = 'Contactos';
?>
<div class="contatos-create">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
