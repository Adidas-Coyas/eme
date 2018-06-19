<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchContatos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contatos';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>
<div class="contatos-index">

    <p>
        <?= Html::a('Adicionar Contatos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'telemovel',
            'telefone',
            'email:email',
            'fax',
            //'localizacao:ntext',
            //'descricao_pt',
            //'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
