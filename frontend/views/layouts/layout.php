<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>EME Marketing</title>

    <!-- Bootstrap
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <!-- yii stiles here -->
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <!--a href="index.html"><h1><span>EME</span>Marketing</h1></a-->
                        <a href="index.html"><?= Html::img('eme2.png', ['class' => 'pull-left logo']) ?><h1 class="cabe"><span class="eme">EME</span>  <span class="merk">Marketing</span></h1></a>
                    </div>
                </div>

                <div class="navbar-collapse collapse">
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><?= Html::a('Home', ['site/index']) ?></li>
                            <li role="presentation"><?= Html::a('Serviços', ['site/about']) ?></li>
                            <li role="presentation"><?= Html::a('Portifolio', ['site/portifolio']) ?></li>
                            <li role="presentation"><?= Html::a('Blog', ['site/blog']) ?></li>
                            <li role="presentation"><?= Html::a('EME', ['site/about']) ?></li>
                            <li role="presentation"><?= Html::a('Contacto', ['site/contact']) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- inicio do conteúdo -->
<?= $content ?>
<!-- fim dos contúdos -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="social-icon">
                <div class="col-md-4">
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="copyright">
                    &copy; EME MARKETING. Todos os direitos reservados.
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                        -->
                        <a href="#">Made</a> by <a href="https://innovatmedia.com/">Imedia</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pull-right">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>
    </div>
</footer>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins)
<script src="js/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>
<!-- end js files  -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
