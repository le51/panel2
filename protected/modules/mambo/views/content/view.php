<?php
$this->breadcrumbs=array(
	'Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Content','url'=>array('index')),
	array('label'=>'Create Content','url'=>array('create')),
	array('label'=>'Update Content','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Content','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Content','url'=>array('admin')),
);
?>

<h2><?php echo $model->title; ?></h2>
Ecrit le:<?php echo $model->created;?><br />
<?php echo $model->introtext; ?>
<?php echo $model->fulltext; ?>

