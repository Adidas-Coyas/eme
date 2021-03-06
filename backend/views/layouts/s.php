<?php
/**
 * User: coyas
 * Date: 5/23/18
 * Time: 3:40 PM
 */

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/sys/eme.png">
    <?= Html::csrfMetaTags() ?>
    <title>EME Admin - Dashboard</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">

          <?php // Html::a('<i class="fas fa-bell"></i><span class="badge">0</span>', [''], ['class' => 'navbar-brand']) ?>
          <?php // Html::a('<i class="fas fa-comments"></i></i><span class="badge">0</span>', ['comentario/index'], ['class' => 'navbar-brand']) ?>

          <div class="dropdown">
            <?= Html::a('AdminEME', ['site/index'], ['class' => 'navbar-brand']) ?>
            <a class="dropdown-toggle navbar-brand" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fas fa-comments"></i></i><span class="badge">0</span>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Action</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Another action</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['site/logout'], ['data' => ['method' => 'post'], 'class' => 'navbar-brand mlog']) ?>
      </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li></li>
                <li></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><?= Html::a('BemVindo, '.Yii::$app->user->identity->username.'', '') ?></li>
                <li><?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><i id="iconCabe" class="fas fa-cog"></i> <span id="title"><?= $this->title?></span> <small id="slogan"></small> </h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="conteudo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Criar Conteúdo
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><?= Html::a('Post', ['post/create']) ?></li>
                        <li><?= Html::a('Testimunho', ['testimunhos/create']) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item active main-color-bg">
                        <i class="fas fa-cog"></i> Dashboard
                    </a>
                    <a id="pagina" class="drop-list list-group-item"><i class="fas fa-folder"></i> Paginas

                        <span class="badge"><i id="flexa" class="fas fa-chevron-down"></i></span>
                    </a>
                    <span class="dropdown-container">
                        <?= Html::a('<i class="far fa-file-alt" are-hidden="true"></i> Portfolio', ['portfolio/index'], ['class' => 'list-group-item', 'id' => '']) ?>
                        <?= Html::a('<i class="far fa-file-alt" are-hidden="true"></i> Projectos', ['pprojetos/index'], ['class' => 'list-group-item', 'id' => '']) ?>
                        <?= Html::a('<i class="far fa-file-alt"  are-hidden="true"></i> Equipa', ['equipa/index'], ['class' => 'list-group-item', 'id' => '']) ?>
                        <?= Html::a('<i class="far fa-file-alt"  are-hidden="true"></i> Parceiros<span class="badge">'.$this->params['user'].'</span>', ['parceiros/index'], ['class' => 'list-group-item', 'id' => '']) ?>
                        <?= Html::a('<i class="far fa-file-alt"  are-hidden="true"></i> Servicos', ['servicos/index'], ['class' => 'list-group-item', 'id' => '']) ?>
                        <?= Html::a('<i class="far fa-file-alt" are-hidden="true"></i> Testimunhos <span class="badge">'. $this->params['user'].'</span>', ['testimunhos/index'], ['class' => 'list-group-item', 'id' => '']) ?>

                        <?= Html::a('<i class="far fa-file-alt"  are-hidden="true"></i> Sobre Nos', ['eme/index'], ['class' => 'list-group-item', 'id' => '']) ?>

                    </span>
                    <?= Html::a('<i class="fas fa-pencil-alt"></i> Posts <span class="badge">'. $this->params['post'].'</span>', ['post/index'], ['class' => 'list-group-item', 'id' => 'posts']) ?>

                    <?= Html::a('<i class="fas fa-user"></i> Usuarios <span class="badge">'. $this->params['user'].'</span>', ['user/index'], ['class' => 'list-group-item', 'id' => 'users']) ?>

                    <?= Html::a('<i class="fas fa-images"></i> Galeria <span class="badge">'. $this->params['galeria'].'</span>', ['galeria/index'], ['class' => 'list-group-item', 'id' => 'gale']) ?>
                </div>
                <div class="well">
                    <h4>Posts Visitados</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                            20%
                        </div>
                    </div>
                    <h4 class="tooltip">Comentarios</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- index views here -->
                <?= $content ?>
            </div>
        </div>
    </div>
</section>




<footer class="footer">
    <p> <span><?= Html::a('Police Privacy', '') ?></span> copyright &copy; EME MARKETING <?= date('Y') ?> <span><?= Html::a('Use Terms', '') ?></span></p>
    <span>Made by <?= Html::a('Imedia', 'http://innovatmedia.com', ['target' => '_Blank']) ?> </span>
</footer>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
