<?php
$this->breadcrumbs = array(
	'Annuaires' => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' Annuaire',
			'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' Annuaire',
		'url'=>array('create')),
	);

?>




<div class="row">
<div class="span10">
<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'annuaire-grid',
	'dataProvider' => $model->search(),
         'itemsCssClass'=>'table table-striped table-condensed',
	//'cssClassExpression'=>'span2',
	'filter' => $model,
    'pagerCssClass'=>'pagination',
	'columns' => array(
		array(

			'type'=>'raw',
			'value'=>'CHtml::link($data->nom_prenom,array("annuaire/view","id"=>$data->id_annu));',
			'name'=>'nom_prenom',

		),	
		'ville',
		'pays',

		'e_mail_perso',

		//'date_naissance',

	),
)); ?>
</div>
<div class="span2">
<h1>Annuaire</h1>
	<ul class="unstyled buttonmenu">
		<li><?php echo CHtml::link('Mon profil',array('/annuaire/'.Yii::app()->user->id),array('class'=>'btn large')); ?> </li>
		<li><?php echo CHtml::link('CA',array('/annuaire/ca'),array('class'=>'btn large')); ?> </li>
		<li><?php echo CHtml::link('Instructeurs',array('/annuaire/instructeurs','id_group'=> 1),array('class'=>'btn large')); ?> </li>
		<li><?php echo CHtml::link('Remorqueurs',array('/annuaire/remorqueurs','id_group'=> 5),array('class'=>'btn large')); ?></li>
		<li><?php echo CHtml::link('Associations',array('/annuaire/associations'),array('class'=>'btn large')); ?> </li>
		<li><?php echo CHtml::link('Tous',array('myCal'),array('class'=>'btn large')); ?> </li>
    </ul>
</div>
</div>
