<?php
$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=>'Create Category','url'=>array('create')),
	array('label'=>'Manage Category','url'=>array('admin')),
);
?>

<h2>Categories</h2>

<?php $this->widget('bootstrap.widgets.TbThumbnails',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
)); ?>
