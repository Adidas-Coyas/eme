<?php

/* @var $this yii\web\View */

use yii\widgets\Breadcrumbs;

$this->title = 'EME';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="breadcrumb">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>

<div class="aboutus">
  <div class="container">
    <h3>Quem somos</h3>
    <hr>
    <div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p>Desde a nossa criação, em 2002, temos tido uma preocupação constante: o de indicar-lhe o
      melhor caminho, a melhor estratégia a adotar para iniciar, manter e fazer crescer, de forma
      equilibrada e produtiva, a sua ideia de negócio ou o seu empreendimento, a um custo justo e
      atraente.</p>
            <p>Ao cuidar da imagem da sua empresa, ao organizar com eficiência e eficácia os seus eventos,
      ao conceber, arquitetar e implementar a sua estratégia de marketing e publicidade dos seus
      produtos e serviços, asseguramos-lhe um sucesso que assenta num saber - fazer forjado em
      vários anos de experiência e desenvolvimento de vários trabalhos para o mercado nacional e
      estrangeiro.</p>
      <p>Orgulhamo-nos de ser uma empresa 100% cabo-verdiana que tem vindo a crescer juntamente
      com Cabo Verde e a prestigiar, ano após ano, com a nossa dedicação, profissionalismo e
      pronta capacidade de resposta, o mercado nacional.</p>
      <p>E por isso, ao longo destes anos, dotamo-nos de equipamentos e capacitamos os nossos
      recursos humanos para oferecer-lhe aquilo que merece e pelo qual anseia, em matéria de
      qualidade na prestação de serviço e oferta de produtos.</p>
      <p>Convidamos-lhe a conhecer-nos melhor e a comprovar que, efetivamente, as emoções criam-
      se.</p>
    </div>
  </div>
</div>
<div class="our-team">
  <div class="container">
    <h3>A Nossa Equipa</h3>
    <div class="text-center">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/services/1.jpg" alt="">
        <h4>John Doe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <img src="images/services/2.jpg" alt="">
        <h4>John Doe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
      </div>
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <img src="images/services/3.jpg" alt="">
        <h4>John Doe</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
      </div>
    </div>
  </div>
</div>
