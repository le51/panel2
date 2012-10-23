<?php

$this->menu=array(
	array('label'=>'List Media','url'=>array('index')),
	array('label'=>'Manage Media','url'=>array('admin')),
);
?>

<h2>Create Media</h2>

<?php 
//echo Yii::app( )->getBaseUrl( )."/tmp/";
//echo realpath( Yii::app( )->getBasePath( )."/../tmp/" )."/";
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'media-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>


	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model, 'status', Media::model()->status); ?>
	<?php //echo $form->dropDownListRow($model, 'status', $this->status); ?>
	<?php //echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
	<?php //echo $this->renderPartial('_file',array('model'=>$upload),true,false); ?>
	<?php echo $form->fileFieldRow($model, 'file');?>
	<?php $this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(
			//array('label'=>'File','content'=>$this->renderPartial('_file',array('model'=>$upload),true,false), 'active'=>true),
			array('label'=>'Fr', 'content'=>$this->renderPartial('_fr',array('form'=>$form, 'model'=>$model),true,false), 'active'=>true),
			array('label'=>'De', 'content'=>$this->renderPartial('_de',array('form'=>$form, 'model'=>$model),true,false)),
			array('label'=>'En', 'content'=>$this->renderPartial('_en',array('form'=>$form, 'model'=>$model),true,false)),
			array('label'=>'Access', 'content'=>$this->renderPartial('_roleSelect',array('form'=>$form, 'model'=>$model),true,false)),
		),
	)); ?>

<?php //print_r(Rights::getAuthItemSelectOptions('2',array('Admin')));?>
	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
