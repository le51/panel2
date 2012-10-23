<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_annu'); ?>
		<?php echo $form->textField($model, 'id_annu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'civilite'); ?>
		<?php echo $form->dropDownList($model, 'civilite', GxHtml::listDataEx(Civilite::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nom_prenom'); ?>
		<?php echo $form->textField($model, 'nom_prenom', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'adresse_1'); ?>
		<?php echo $form->textField($model, 'adresse_1', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'adresse_2'); ?>
		<?php echo $form->textField($model, 'adresse_2', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'code_postal'); ?>
		<?php echo $form->textField($model, 'code_postal', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ville'); ?>
		<?php echo $form->textField($model, 'ville', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'pays'); ?>
		<?php echo $form->dropDownList($model, 'pays', GxHtml::listDataEx(Pays::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tel_perso'); ?>
		<?php echo $form->textField($model, 'tel_perso', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tel_mobile'); ?>
		<?php echo $form->textField($model, 'tel_mobile', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tel_prof'); ?>
		<?php echo $form->textField($model, 'tel_prof', array('maxlength' => 25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fax'); ?>
		<?php echo $form->textField($model, 'fax', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'e_mail_perso'); ?>
		<?php echo $form->textField($model, 'e_mail_perso', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'e_mail_pro'); ?>
		<?php echo $form->textField($model, 'e_mail_pro', array('maxlength' => 60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mot_de_passe'); ?>
		<?php echo $form->textField($model, 'mot_de_passe', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'date_naissance'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'date_naissance',
			'value' => $model->date_naissance,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'sexe'); ?>
		<?php echo $form->textField($model, 'sexe', array('maxlength' => 1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_classeur'); ?>
		<?php echo $form->dropDownList($model, 'id_classeur', GxHtml::listDataEx(Classeur::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_photo'); ?>
		<?php echo $form->dropDownList($model, 'id_photo', GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_photo_mini'); ?>
		<?php echo $form->dropDownList($model, 'id_photo_mini', GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'site_internet'); ?>
		<?php echo $form->textField($model, 'site_internet', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'id_langue'); ?>
		<?php echo $form->dropDownList($model, 'id_langue', GxHtml::listDataEx(Langue::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lieu_naissance'); ?>
		<?php echo $form->textField($model, 'lieu_naissance', array('maxlength' => 60)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
