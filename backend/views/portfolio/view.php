<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Portfolio */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="portfolio-view">



    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Queres mesmo apagar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
            'descricao:html',
          //  'foto',
            [
                    'label' => 'foto',
                    'value' => function($data){
                        return Html::img('uploud/portfolio/'.$data->foto,
                                ['width' => '200px', 'heigth' => '120px']
                            );
                    },
                    'format' => 'html',
            ],
            'lang',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
