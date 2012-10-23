<?php $form=$this->beginWidget('ext.bootstrap.widgets.BootActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldBlock($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldBlock($model,'civilite',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldBlock($model,'nom_prenom',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'adresse_1',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'adresse_2',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'code_postal',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'ville',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'pays',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'tel_perso',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldBlock($model,'tel_mobile',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldBlock($model,'tel_prof',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldBlock($model,'fax',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldBlock($model,'e_mail_perso',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'email_pro',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldBlock($model,'date_naissance',array('class'=>'span5')); ?>

	<?php echo $form->textFieldBlock($model,'sexe',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldBlock($model,'id_classeur',array('class'=>'span5')); ?>

	<?php echo $form->textFieldBlock($model,'id_photo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldBlock($model,'id_photo_mini',array('class'=>'span5')); ?>

	<?php echo $form->textFieldBlock($model,'site_internet',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldBlock($model,'id_langue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldBlock($model,'lieu_naissance',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldBlock($model,'status',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldBlock($model,'updated_by',array('class'=>'span5')); ?>

	<div class="actions">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn primary')); ?>
	</div>

<?php $this->endWidget(); ?>
