<?php
$this->breadcrumbs=array(
	'Updateannuaires'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Updateannuaire','url'=>array('index')),
	array('label'=>'Create Updateannuaire','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('updateannuaire-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Updateannuaires</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo BootHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('ext.bootstrap.widgets.grid.BootGridView',array(
	'id'=>'updateannuaire-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'civilite',
		'nom_prenom',
		'adresse_1',
		'adresse_2',
		'code_postal',
		/*
		'ville',
		'pays',
		'tel_perso',
		'tel_mobile',
		'tel_prof',
		'fax',
		'e_mail_perso',
		'email_pro',
		'date_naissance',
		'sexe',
		'id_classeur',
		'id_photo',
		'id_photo_mini',
		'site_internet',
		'id_langue',
		'lieu_naissance',
		'status',
		'updated_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
