<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPortfolio */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portfolios';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="portfolio-index">
    <p>
        <?= Html::a('Criar Portfolio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',

          //  'foto',
            [
                    'label' => 'foto',
                    'value' => function($data){
                        return Html::img('uploud/portfolio/'.$data->foto,
                                ['width' => '80px', 'heigth' => '80px']
                            );
                    },
                    'format' => 'html',
            ],
            'nome',
            'descricao:html',
          //  'created_at',

          //  'lang',
            //
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
