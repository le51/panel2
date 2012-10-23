<?php
$this->breadcrumbs=array(
	'Updateannuaires',
);

$this->menu=array(
	array('label'=>'Create Updateannuaire','url'=>array('create')),
	array('label'=>'Manage Updateannuaire','url'=>array('admin')),
);
?>

<h1>Updateannuaires</h1>

<?php $this->widget('ext.bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
