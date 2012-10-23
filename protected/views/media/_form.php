<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'media-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<?php $this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(
			array('label'=>'File','content'=>$this->renderPartial('_file',array('form'=>$form, 'model'=>$model,'upload'=>$upload),true,false), 'active'=>true),
			array('label'=>'Fr', 'content'=>$this->renderPartial('_fr',array('form'=>$form, 'model'=>$model),true,false)),
			array('label'=>'De', 'content'=>$this->renderPartial('_de',array('form'=>$form, 'model'=>$model),true,false)),
			array('label'=>'En', 'content'=>$this->renderPartial('_en',array('form'=>$form, 'model'=>$model),true,false)),
			array('label'=>'Access', 'content'=>$this->renderPartial('_roleSelect',array('form'=>$form, 'model'=>$model),true,false)),
		),
	)); ?>

<?php //print_r(Rights::getAuthItemSelectOptions('2',array('Admin')));?>
	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
