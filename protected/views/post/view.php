<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post','url'=>array('index')),
	array('label'=>'Create Post','url'=>array('create')),
	array('label'=>'Update Post','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Post','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post','url'=>array('admin')),
);
?>

<h2>View Post #<?php echo $model->title; ?></h2>
<?php echo $model->body; ?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'title',
		'body',
		'published',
		'created_at',
	),
)); ?>
