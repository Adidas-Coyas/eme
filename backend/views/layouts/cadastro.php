<?php
/**
 * Created by PhpStorm.
 * User: coyas
 * Date: 5/25/18
 * Time: 12:25 PM
 */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Html;


AppAsset::register($this);
$this->title = 'Registro';
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/sys/eme.png">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode('EME - '.$this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-3 dixebaxu">
                <div class="panel panel-default">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>