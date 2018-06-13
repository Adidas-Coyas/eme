
<!-- Ultimos Usuarios -->
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
  </div>
  <div class="panel-body">
    Panel content
  </div>
</div>
<!-- para centalizar os form -->
<div class="col-md-10 col-md-offset-1">

</div>

$this->params['user'] = $data['user'];
$this->params['post'] = $data['post'];
$this->params['parceiro'] = $data['parceiro'];
$this->params['title'] = $this->title;

