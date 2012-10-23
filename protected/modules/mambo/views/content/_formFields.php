	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>100)); ?>

	<?php //echo $form->textFieldRow($model,'title_alias',array('class'=>'span5','maxlength'=>100)); ?>
	<?php 
	/*$this->widget('application.extensions.redactorjs.Redactor', array( 
		'lang' => 'fr', 
		//'toolbar' => 'mini', 
		'model' => $model, 
		'attribute' => 'introtext' 
		));*/
		Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
			$this->widget('ImperaviRedactorWidget',array(
			// you can either use it for model attribute
			'model'=>$model,
			'attribute'=>'introtext',
			// or just for input field
			//'name'=>'my_input_name',
			// imperavi redactor {@link http://redactorjs.com/docs/ options}
			'options'=>array(
				'lang'=>'fr',
				//'toolbar'=>'mini',
				//'css'=>'wym.css',
		),
	));
		?>
	<?php echo $form->dropDownListRow($model, 'state', array('Something ...', '1'=>'published', '-2'=>'archived', '0'=>'unpublished')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
