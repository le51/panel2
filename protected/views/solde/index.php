<div class="row">
<div class="span9">
<h1>Solde pilotes</h1>
<?php  
$this->widget('zii.widgets.jui.CJuiTabs', array('tabs'=>array(
	'Année en cours'=>array('ajax'=>array('actif')),
	'3 dernières années'=>array('ajax'=>array('actif3')),
	'Tous'=>array('ajax'=>array('tous')),
)));
/*$this->widget('bootstrap.widgets.BootGridView', array(
	'id' => 'solde-grid',
	'dataProvider' => $solde3,
         'itemsCssClass'=>'table table-striped table-condensed',
	//'cssClassExpression'=>'span2',
	//'filter' => $model,
    'pagerCssClass'=>'pagination',
	'columns' => array(	
		'pilote',
		'solde',

		//'e_mail_perso',

		//'date_naissance',

	),
));  */
//print_r($model);
?>
</div>
<div class="span3">
Total compte débiteurs
</div>
</div>
