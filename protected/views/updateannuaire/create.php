<?php
$this->breadcrumbs=array(
	'Updateannuaires'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Updateannuaire','url'=>array('index')),
	array('label'=>'Manage Updateannuaire','url'=>array('admin')),
);
?>

<h1>Create Updateannuaire</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>