<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTestimunhos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testimunhos';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="testimunhos-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Testimunhos', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
          //  'nome',
            [
                    'label' => 'Foto',
                    'value' => function($data){
                        return Html::img('uploud/testimunho/'.$data->foto,
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
