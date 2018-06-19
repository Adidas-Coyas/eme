<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Testimunhos */

$this->title = "Testimunho de ".$model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Testimunhos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="testimunhos-view">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Quer mesmo apagar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nome',
            //'foto',
            [
                    'label' => 'Foto',
                    'value' => function($data){
                        return Html::img('uploud/testimunho/'.$data->foto,
                                ['width' => '250px', 'heigth' => '200px']
                            );
                    },
                    'format' => 'html',
            ],
            'descricao:html',
            'lang',
        ],
    ]) ?>

</div>
