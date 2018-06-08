<?php
/**
 * User: coyas
 * Date: 5/23/18
 * Time: 4:51 PM
 */

use backend\assets\LoginAsset;
use common\widgets\Alert;
use yii\helpers\Html;

LoginAsset::register($this);
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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

  <div class="container">
    <div class="row">
        <div class="b1">
            <?= Alert::widget() ?>
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-offset-4 b">
            <?= $content ?>
        </div>

    </div>

  </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
