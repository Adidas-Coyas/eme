<?php

use yii\helpers\Html;
use yii\grid\GridView;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['title'] = $this->title;
?>

        <p><?= Html::a('Novo Usuario', ['site/signup'], ['class' => 'btn btn-primary']) ?></p>
        <?= DataTables::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'username',
                //'auth_key',
                //'password_hash',
                //'password_reset_token',
                'email:email',
                'categoria',
                'status',
                //'created_at',
                //'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
            'clientOptions' => [
                //"lengthMenu"=> [[20,-1], [20,Yii::t('app',"Todos")]],
                "info"=>false,
                "responsive"=>true,
                "dom"=> 'lfTrtip',
                "tableTools"=>[
                    "aButtons"=> [
                        [
                            "sExtends"=> "copy",
                            "sButtonText"=> Yii::t('app',"Copy to clipboard")
                        ],[
                            "sExtends"=> "csv",
                            "sButtonText"=> Yii::t('app',"Save to CSV")
                        ],[
                            "sExtends"=> "xls",
                            "oSelectorOpts"=> ["page"=> 'current']
                        ],[
                            "sExtends"=> "pdf",
                            "sButtonText"=> Yii::t('app',"Save to PDF")
                        ],[
                            "sExtends"=> "print",
                            "sButtonText"=> Yii::t('app',"Print")
                        ],
                    ]
                ]
            ],
        ]);?>


