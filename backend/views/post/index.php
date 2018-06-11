<!--
<php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-index">

    <h1><= Html::encode($this->title) ?></h1>
    <php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_pt',
            'title_en',
            'descricao_pt:ntext',
            'descricao_en:ntext',
            //'midea_pt',
            //'midea_en',
            //'anexo_pt',
            //'anexo_en',
            //'created_at',
            //'update_at',
            //'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
-->
<?php
/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$slogan = 'Veja e crie Notiçias';
$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
?>


<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title"><?= $this->title ?></h3>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'title_pt',
                //'title_en',
                'descricao_pt:ntext',
                // 'descricao_en:ntext',
                'midea_pt',
                //'midea_en',
                'anexo_pt',
                //'anexo_en',
                //'created_at',
                //'update_at',
                //'id_user',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>

