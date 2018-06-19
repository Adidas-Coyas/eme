<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchServicos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicos';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="servicos-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Serviços', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
          //  'icon',
            [
                    'label' => 'Icon',
                    'value' => function($data, $key, $index, $column){
                        return Html::img('uploud/servicos/'.$data->icon,
                                ['width' => '80px', 'heigth' => '80px']
                            );
                    },
                    'format' => 'html',
            ],
            'nome',
            'descricao:html',

            'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
