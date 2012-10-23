<?php  
$this->widget('bootstrap.widgets.BootGridView', array(
	'id' => 'solde_tous-grid',
	'dataProvider' => $solde,
         'itemsCssClass'=>'table table-striped table-condensed',
	//'cssClassExpression'=>'span2',
	//'filter' => $model,
    'pagerCssClass'=>'pagination',
	'columns' => array(	
		'pilote',
		'solde',
	),
)); 
//print_r($model);
?>
