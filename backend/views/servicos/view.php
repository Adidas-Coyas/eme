<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Servicos */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Serviços', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="servicos-view">


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
          //  'id',
            'nome',
            //'icon',
            [
                    'label' => 'Capa',
                    'value' => function($data){
                        return Html::img('uploud/servicos/'.$data->icon,
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
