<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'vols-grid',
	'dataProvider' => $model,
        'itemsCssClass'=>'table table-striped table-condensed',
	//'filter' => $model,
	'ajaxUpdate'=>true,
    	'pagerCssClass'=>'pagination',
	'columns' => array(
		'date_vol',
		array(
				'header'=>'Immatriculation',				
				'name'=>'idVol.idAeronef',
				//'type'=>'raw',
				//'value'=>$data->idVol->idAeronef->immatriculation,
				//'filter'=>GxHtml::listDataEx(Classeur::model()->findAllAttributes(null, true)),
				),
		array(
				'header'=>'Décollage',
				'name'=>'idVol.decollage',
				//'type'=>'raw',
				//'value'=>'Yii::app()->dateFormatter->formatDateTime($data->idVol->atterrissage - $data->idVol->decollage,\'\',\'short\')',
				//'filter'=>GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)),
				//'value'=>$data->idVol->decollage,
				),
		array(
				'header'=>'Atterrissage',
				'name'=>'idVol.atterrissage',
				//'type'=>'raw',
				//'value'=>'Yii::app()->dateFormatter->formatDateTime($data->idVol->atterrissage - $data->idVol->decollage,\'\',\'short\')',
				//'filter'=>GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)),
				//'value'=>$data->idVol->atterrissage,
				),
		/*array(
				'name'=>'id_photo_mini',
				'value'=>'GxHtml::valueEx($data->idPhotoMini)',
				'filter'=>GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)),
				),*/
		//'site_internet',
		
		/*array(
			'class' => 'CButtonColumn',
		),*/
	),
)); ?>
<?php echo CHtml::link('Signaler une erreur',array('#'),array('class'=>'btn large')); ?>
