<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comentario */

$this->title = 'Comentarios';
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['title'] = 'Criar '.$this->title;
?>

<div class="col-md-10 col-md-offset-1">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

