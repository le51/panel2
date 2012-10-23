<?php
$this->breadcrumbs = array(
	'Annuaires' => array('index'),
	GxHtml::valueEx($model),
);
?>
<div class="row">
<div class="span9">
<br />
<?php 
$message="Votre compte pilote est de : ".Annuaire::model()->account($model->id_annu)." €";
 ?>

<?php $this->widget('bootstrap.widgets.TbTabs', array(
	'type'=>'tabs', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Compte pilote', 'content'=>$message, 'active'=>true),
		array('label'=>'Détail contact', 'content'=>$this->renderPartial('_contact',array('model'=>$model),true,false)),
		array('label'=>'Fiche pilote', 'content'=>$this->renderPartial('_pilot',array('model'=>$pilote),true,false)),
		//array('label'=>'Vols', 'content'=>'content'=>$this->renderPartial('_vols',array('model'=>$vols),true,false)),
    ),
)); ?>
</div>
<div class="span3">
<h3><?php echo GxHtml::encode($model->nom_prenom); ?></h3>

</div>

</div>
