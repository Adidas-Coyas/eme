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
    <script src="http://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <?= Html::a('AdminEME', ['site/index'], ['class' => 'navbar-brand']) ?>
            <?= Html::a('<i class="fas fa-bell"></i><span class="badge">0</span>', [''], ['class' => 'navbar-brand']) ?>
            <?= Html::a('<i class="fas fa-comments"></i></i><span class="badge">0</span>', [''], ['class' => 'navbar-brand']) ?>
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
                        <li><a type="button" data-toggle="modal" data-target="#addPost">Post</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li><a href="#">Testimunho</a></li>
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
                  <a href="Portfolio.php" class="list-group-item"><i class="far fa-file-alt" are-hidden="true"></i> Portfolio</a>
                  <a href="equipa.php" class="list-group-item"><i class="far fa-file-alt"  are-hidden="true"></i> Equipa</a>
                  <a href="parceiros.php" class="list-group-item"><i class="far fa-file-alt"  are-hidden="true"></i> Parceiros
                      <span class="badge">0</span></a>
                  <a href="servicos.php" class="list-group-item"><i class="far fa-file-alt"  are-hidden="true"></i> Servicos</a>

                </span>
                    <?= Html::a('<i class="fas fa-pencil-alt"></i> Posts <span class="badge">0</span>', ['post/index'], ['class' => 'list-group-item', 'id' => 'posts']) ?>

                    <?= Html::a('<i class="fas fa-user"></i> Usuarios <span class="badge">0</span>', ['user/index'], ['class' => 'list-group-item', 'id' => 'users']) ?>
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
    <span>Made by <?= Html::a('Imedia', 'http://innovatmedia.com') ?> </span>
</footer>

<!-- Modals -->

<!-- AddPost Modal -->
<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-header main-color-bg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Adicionar Um Post</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="titulo" value="">
                    </div>
                    <div class="form-group">
                        <label>Conteudo</label>
                        <textarea name="descricao" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Medias</label>
                        <input type="text" name="media" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Anexo</label>
                        <input type="file" name="anexo" value="Anexo">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="publicar"> Publicar
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-red" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default btn-verde">limpar</button>
                    <button type="button" class="btn btn-default btn-verde">Save changes</button>
                </div>
        </form>
    </div>
</div>
</div>

<script>
    CKEDITOR.replace( 'descricao' );
</script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
