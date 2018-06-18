<?php

/* @var $this yii\web\View
site-index
*/

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

//$slogan = 'Gerencie seu site';
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['galeria'] = $data['galeria'];
$this->params['title'] = $this->title;
?>

<!-- index here -->
<!-- Visão geral do site -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Visão Geral Do Site</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-user-tie"></i> <?=  $data['user'] ?></h2>
                <h4>Usuarios</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-pencil-alt"></i> <?=  $data['post'] ?></h2>
                <h4>Posts</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-chart-line"></i> 0</h2>
                <h4>Visitas</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well dash-box">
                <h2><i class="fas fa-comment-dots"></i> <?= $data['comentario'] ?></h2>
                <h4>Comentarios</h4>
            </div>
        </div>
    </div>
</div>

<!-- Ultimos Comentarios -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Ultimos Comentarios</h3>
    </div>
    <div class="panel-body">


          <?php
            foreach ($comment as $comments) {
            echo '
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-2">
                    <i class="fas fa-user-tie fa-3x well"  ></i>
                  </div>
                  <div class="col-md-8">'.
               $comments['autor'].'<br>'.substr($comments['comentario'], 0, 70)
               .'</div>
               <div class="col-md-2">
                 <button>Detalhes</button>
               </div>
             </div>
           </div>';
            }
           ?>

    </div>
    <div class="panel-footer btn btn-block bb"><?= Html::a('Ver Todos', ['comentario/index'], ['class' => '']) ?></div>
</div>

<!-- Ultimos Usuarios -->
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Ultimos Posts</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
          <?php
            foreach ($post as $posts) {
            echo '
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-2">
                    <i class="fas fa-user-tie fa-3x well"  ></i>
                  </div>
                  <div class="col-md-8">'.
                  $posts['title'].'<br>'.substr($posts['content'], 0, 70)
               .'</div>
               <div class="col-md-2">
                 <button>Detalhes</button>
               </div>
             </div>
           </div>';
            }
           ?>
        </table>
    </div>
    <div class="panel-footer btn btn-block bb"><?= Html::a('Ver Todos', ['post/index'], ['class' => '']) ?></div>
</div>
