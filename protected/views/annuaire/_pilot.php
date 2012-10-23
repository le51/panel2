<?php
	$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'trigram_instructeur',
		'trigram_remorqueur',
		'heure_tot_pilote_vi',
		
	),
        'itemTemplate' => "<tr class=\"{class}\"><td style=\"width: 120px\"><b>{label}</b></td><td>{value}</td></tr>\n",
        'htmlOptions' => array(
            'class' => 'table',
        ),
	));
?>
<?php echo CHtml::link('Mettre à jour',array('#'),array('class'=>'btn large')); ?>
