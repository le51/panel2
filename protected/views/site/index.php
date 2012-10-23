<?php $this->pageTitle=Yii::app()->name; ?>
<div class="row">
	<div class="span4">
		<?php if(Yii::app()->user->isGuest){
			$this->renderPartial('_login',array('model'=>$model),false,true); 
			} else { ?>
				<div class="alert alert-success">
				<a class="close" data-dismiss="alert">×</a>
					<h3><?php echo Yii::app()->user->name; ?></h3>
					<p>Votre compte est à: <?php echo Annuaire::model()->account(Yii::app()->user->id); ?> €</p>
				</div>
			<?php
			}
		?>
		<h3>Dernières nouvelles</h3>
		<?php $this->widget('bootstrap.widgets.TbListView',array(
			'dataProvider'=>$dataProvider,
			'summaryText'=>'',
			'enablePagination'=>false,
			'itemView'=>'_mambo',
		)); ?>
	</div>
	<div class="span8">
	<h2>Aujourd'hui à Vinon</h2>
<?php $this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Webcam Sud', 'content'=>$this->renderPartial('_webcamSud','',true,false), 'active'=>true),
		array('label'=>'Webcam Nord', 'content'=>$this->renderPartial('_webcamNord','',true,false)),
		array('label'=>'Météo', 'content'=>'
			<span style="display: block !important; width: 320px; text-align: center; font-family: sans-serif; font-size: 12px;">
			<a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:00000.6.07588&bannertypeclick=wu_travel_runway1" title="Vinon, France Weather Forecast">
			<img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_travel_runway1_metric&pwscode=IBDRAIXE2&ForcedCity=Vinon&ForcedState=&wmo=07588&language=FR" alt="Find more about Weather in Vinon, FR" width="320" /></a>
			</span>
		'),
		array(	'label'=>'Instructeurs', 
				'content'=>$this->renderPartial('_instructeurs',array(
					'instructeurs'=>$instructeurs,
				), true, false),
		),
		array(	'label'=>'Remorqueurs', 
				'content'=>$this->renderPartial('_remorqueurs',array(
					'benevoles'=>$remorqueurs,
				), true, false),
		),
        /*'events'=>array(
            'show'=>"js:function() { console.log('Tabbable show.'); }",
            'shown'=>"js:function() { console.log('Tabbable shown.'); }",
        ),*/
    ),
)); ?>
	</div>
</div>

