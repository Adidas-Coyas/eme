<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

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
            'id',
            'title',
            'content:ntext',
            'anexo',
            'created_at',
            'update_at',
            'publicar',
            'id_user',
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
        <p>Ultimos Comentarios</p>


                <?php
                    foreach ($coment as $dados) {
                        echo "<div class=\"row\">";
                        echo "
                            <div class=\"col-md-2\">
                                <i class='fas fa-user fa-2x well'></i>
                            </div>
                        ";
                            echo "<div class=\"col-md-10\">";

                                    echo $dados['autor']."<br>";
                                    echo $dados['comentario']."<br>";

                           echo "</div>";
                           echo "<span><i class=\"fa fa-trash-o\"></i></span>";
                        echo "</div>";
                    }
                ?>


    </div>

</div>
