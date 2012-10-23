<?php
	$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'nom_prenom',
		'adresse_1',
		'adresse_2',
		'code_postal',
		'ville',
		'pays',
		'tel_perso',
		'tel_mobile',
		'e_mail_perso',
		'date_naissance',
	),
        'itemTemplate' => "<tr class=\"{class}\"><td style=\"width: 120px\"><b>{label}</b></td><td>{value}</td></tr>\n",
        'htmlOptions' => array(
            'class' => 'table',
        ),
	));
?>
<?php echo CHtml::link('Mettre à jour',array('updateannuaire/update','id'=>$model->id_annu),array('class'=>'btn large')); ?>
