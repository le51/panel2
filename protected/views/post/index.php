<?php
$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>

<h2>Posts</h2>
<div class="row">
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
