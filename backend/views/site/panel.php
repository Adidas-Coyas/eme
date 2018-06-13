
<!-- Ultimos Usuarios -->
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Ultimos Usuarios</h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<!-- para centalizar os form -->
<div class="col-md-8 col-md-offset-2">

</div>

<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title"><?= $this->title ?></h3>
    </div>
    <div class="panel-body">
        <p><?= Html::a('Novo Usuario', ['site/signup'], ['class' => 'btn btn-primary']) ?></p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'username',
                //'auth_key',
                //'password_hash',
                //'password_reset_token',
                'email:email',
                'categoria',
                'status',
                //'created_at',
                //'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
