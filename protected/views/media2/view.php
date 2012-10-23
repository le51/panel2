<?php
$this->breadcrumbs=array(
	'Medias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Media','url'=>array('index')),
	array('label'=>'Create Media','url'=>array('create')),
	array('label'=>'Update Media','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Media','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Media','url'=>array('admin')),
);
?>

<h1>View Media #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'created_at',
		'modified_at',
		'created_by',
		'modified_by',
		'reader_role',
		'editor_role',
		'manager_role',
		'title_fr',
		'description_fr',
		'title_de',
		'description_de',
		'title_en',
		'description_en',
		'status',
	),
)); ?>
