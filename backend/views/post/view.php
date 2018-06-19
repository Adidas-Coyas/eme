<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\db\Query;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = 'Post: '.$model->title;
?>
<div class="post-view">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apagando um post, apagará todos os comentarios relacionados !',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'title',
          //  'anexo',
            [
                    'label' => 'capa',
                    'value' => function($data){
                        return Html::img('uploud/post/'.$data->anexo,
                                ['width' => '200px', 'heigth' => '120px']
                            );
                    },
                    'format' => 'html',
            ],
            'created_at',
            'update_at',
            'content:html',
            [
              'attribute' =>'Estado',
              'value' => function($data){
                if($data->publicar == 1){
                  return "Publicado";
                }else {
                  return "Arquivado";
                }
              }
            ],
            //'id_user',
            /*[
                    'attribute' => 'id_user',
                    'value' => function ($data,$user )
                    {

                      //if(){
                        return $user;
                      //}else {
                        //return null;
                    //  }
                    }
            ],*/
            'lang',
        ],
    ]) ?>
    <!-- fazer comentario -->
    <div class="">
        <?= $this->render('_comment', [
            'comentario' => $comentario,
        ]) ?>
    </div>
    <!-- Ultimos Comentarios -->
    <div class="">
        <p><h4>Ultimos Comentarios</h4></p>
        <?php
            foreach ($coment as $dados) {
                echo "<div class=\"row\">";
                echo "
                    <div class=\"col-md-2\">
                        <i class='fas fa-user fa-2x well'></i>
                    </div>
                ";
                    echo "<div class=\"col-md-8\">";

                            echo "<p class=\"autor\">".$dados['autor']."<p>";
                            echo "<p class=\"comment\">".$dados['comentario']."<br>";

                   echo "</div>";
                   echo "<div class=\"col-md-2\"><div class=\"well \"></div></div>";
                echo "</div>";
            }
        ?>
    </div>

</div>
