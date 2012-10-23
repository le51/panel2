<?php
$this->breadcrumbs=array(
	'Contents',
);

$this->menu=array(
	array('label'=>'Create Content','url'=>array('create')),
	array('label'=>'Manage Content','url'=>array('admin')),
);
?>
<div class="well">
<h2>Actualités vinon-soaring.fr</h2>
<p>Retrouvez ici tous les articles parus sur le site.</p>
</div>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
//print_r($arrayProvider->getData());
?>

