<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchComentario */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comentarios';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>


        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Adicionar Comentario', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'autor',
                //'comentario:ntext',
                //'id_post',
                [
                        'attribute' => 'Post',
                        'value' => 'post.title'
                ],
                'created_at',
                'updated_at',
                //'respondeu',


                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
