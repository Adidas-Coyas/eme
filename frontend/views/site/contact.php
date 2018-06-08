<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\Breadcrumbs;

$this->title = 'Contactos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="breadcrumb">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>

<div class="map">
    <div id="google-map" data-latitude="14.9105862" data-longitude="-23.5283308"></div>
</div>

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Drop Your Message</h2>
            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <div class="col-md-6 ">
                <div class="col-md-8 col-md-offset-2 box">
                    <div class="col-md-12">
                        Palmarejo Braia CV-PR, República de Cabo Verde
                    </div>
                    <div class="col-md-12">
                        <a href="tel:+2382614915"><i class="fa fa-phone">  +238 261 49 15</i></a>
                    </div>
                    <div class="col-md-12">
                        <a href="mailto:eme@sapo.cv"><i class="fa fa-envelope">  eme@sapo.cv</i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Nome'])->label(false) ?>

                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>

                    <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Assunto'])->label(false) ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Mensagem...'])->label(false) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="text-center">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success btn-lg', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
