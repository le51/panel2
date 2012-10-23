<?php
$this->breadcrumbs=array(
	'Updateannuaires'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Updateannuaire','url'=>array('index')),
	array('label'=>'Create Updateannuaire','url'=>array('create')),
	array('label'=>'Update Updateannuaire','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Updateannuaire','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Updateannuaire','url'=>array('admin')),
);
?>

<h1>View Updateannuaire #<?php echo $model->id; ?></h1>

<?php $this->widget('ext.bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'civilite',
		'nom_prenom',
		'adresse_1',
		'adresse_2',
		'code_postal',
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
	),
)); ?>
