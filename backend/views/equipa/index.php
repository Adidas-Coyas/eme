<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchEquipa */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipas';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="equipa-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Equipa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'foto',
            [
                    'label' => 'foto',
                    'value' => function($data){
                        return Html::img('uploud/equipa/'.$data->foto,
                                ['width' => '80px', 'heigth' => '80px']
                            );
                    },
                    'format' => 'html',
            ],
            'nome',
          //  'sobre_pt:html',
          [
            'attribute' => 'Portugues',
            'value' => function($data){
              return substr (Html::decode($data->sobre_pt), 0, 40);
            },
            'format' => 'html'
          ],
          //  'sobre_en:html',
            [
              'attribute' => 'Ingles',
              'value' => function($data){
                return substr (Html::decode($data->sobre_en), 0, 40);
              },
              'format' => 'html'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
