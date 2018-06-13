<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

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
        <p><?= Html::a('Novo Post', ['create'], ['class' => 'btn btn-success']) ?></p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'title',
                'descricao:ntext',
                'anexo',
                'created_at',
                //'update_at',
                //'publicar',
                //'id_user',
                //'lang',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

