<?php $form=$this->beginWidget('ext.bootstrap.widgets.TbActiveForm',array(
	'id'=>'updateannuaire-form',
	//'id'=>'verticalForm',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'well'),
	'action'=>'save',
)); ?>

	<p class="help-">FieldRows with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<?php echo $form->dropDownListRow($model,'civilite',array('Dr'=>'Dr','M.'=>'M.','Me'=>'Me','Mlle'=>'Mlle','5'=>'Mme','Pr'=>'Pr')); ?>


	<?php echo $form->textFieldRow($model,'nom_prenom',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'adresse_1',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'adresse_2',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'code_postal',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'ville',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'pays',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'tel_perso',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'tel_mobile',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'tel_prof',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'fax',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'e_mail_perso',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'e_mail_pro',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'date_naissance',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'sexe',array('H'=>'Masculin','F'=>'Feminin','A'=>'Association')); ?>

	<?php echo $form->textFieldRow($model,'site_internet',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListRow($model,'id_langue',array('Français'=>'Français','English'=>'English','Deutsch'=>'Deutsch','Nederlands'=>'Nederlands')); ?>

	<?php echo $form->textFieldRow($model,'lieu_naissance',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>25)); ?>

	<?php //echo $form->textFieldRow($model,'updated_by',array('class'=>'span5')); ?>

	<div class="actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
