<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchEme */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sobre nos';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="eme-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Sobre Nos', ['create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Ver Contatos', ['contatos/index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'sobre:html',
            'missao:html',
            'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
