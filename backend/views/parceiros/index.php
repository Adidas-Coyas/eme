<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchParceiros */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parceiros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parceiros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parceiros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'descricao_pt:ntext',
            'descricao_en:ntext',
            'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
