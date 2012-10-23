<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('annuaire-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'annuaire-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id_annu',
		array(
				'name'=>'civilite',
				'value'=>'GxHtml::valueEx($data->civilite0)',
				'filter'=>GxHtml::listDataEx(Civilite::model()->findAllAttributes(null, true)),
				),
		'nom_prenom',
		'adresse_1',
		'adresse_2',
		'code_postal',
		/*
		'ville',
		array(
				'name'=>'pays',
				'value'=>'GxHtml::valueEx($data->pays0)',
				'filter'=>GxHtml::listDataEx(Pays::model()->findAllAttributes(null, true)),
				),
		'tel_perso',
		'tel_mobile',
		'tel_prof',
		'fax',
		'e_mail_perso',
		'e_mail_pro',
		'mot_de_passe',
		'date_naissance',
		'sexe',
		array(
				'name'=>'id_classeur',
				'value'=>'GxHtml::valueEx($data->idClasseur)',
				'filter'=>GxHtml::listDataEx(Classeur::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'id_photo',
				'value'=>'GxHtml::valueEx($data->idPhoto)',
				'filter'=>GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'id_photo_mini',
				'value'=>'GxHtml::valueEx($data->idPhotoMini)',
				'filter'=>GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)),
				),
		'site_internet',
		array(
				'name'=>'id_langue',
				'value'=>'GxHtml::valueEx($data->idLangue)',
				'filter'=>GxHtml::listDataEx(Langue::model()->findAllAttributes(null, true)),
				),
		'lieu_naissance',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>