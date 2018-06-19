<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchParceiros */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parceiros';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="parceiros-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Parceiro', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                    'label' => 'Conteudo',
                    'value' => function($data, $key, $index, $column){
                        return Html::img('uploud/parceiros/'.$data->logo,
                                ['width' => '80px', 'heigth' => '80px']
                            );
                    },
                    'format' => 'html',
            ],
            'nome',
            'descricao_pt:html',
            'descricao_en:html',
          //  'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
