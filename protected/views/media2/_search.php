<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'modified_at',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modified_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'reader_role',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'editor_role',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'manager_role',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'title_fr',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textAreaRow($model,'description_fr',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'title_de',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description_de',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'title_en',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description_en',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
