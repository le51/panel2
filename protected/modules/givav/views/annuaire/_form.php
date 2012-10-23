<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'annuaire-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'civilite'); ?>
		<?php echo $form->dropDownList($model, 'civilite', GxHtml::listDataEx(Civilite::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'civilite'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nom_prenom'); ?>
		<?php echo $form->textField($model, 'nom_prenom', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'nom_prenom'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'adresse_1'); ?>
		<?php echo $form->textField($model, 'adresse_1', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'adresse_1'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'adresse_2'); ?>
		<?php echo $form->textField($model, 'adresse_2', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'adresse_2'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'code_postal'); ?>
		<?php echo $form->textField($model, 'code_postal', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'code_postal'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ville'); ?>
		<?php echo $form->textField($model, 'ville', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'ville'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'pays'); ?>
		<?php echo $form->dropDownList($model, 'pays', GxHtml::listDataEx(Pays::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'pays'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tel_perso'); ?>
		<?php echo $form->textField($model, 'tel_perso', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'tel_perso'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tel_mobile'); ?>
		<?php echo $form->textField($model, 'tel_mobile', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'tel_mobile'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tel_prof'); ?>
		<?php echo $form->textField($model, 'tel_prof', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'tel_prof'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model, 'fax', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'fax'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'e_mail_perso'); ?>
		<?php echo $form->textField($model, 'e_mail_perso', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'e_mail_perso'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'e_mail_pro'); ?>
		<?php echo $form->textField($model, 'e_mail_pro', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'e_mail_pro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'mot_de_passe'); ?>
		<?php echo $form->textField($model, 'mot_de_passe', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'mot_de_passe'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'date_naissance'); ?>
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
		<?php echo $form->error($model,'date_naissance'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sexe'); ?>
		<?php echo $form->textField($model, 'sexe', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'sexe'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_classeur'); ?>
		<?php echo $form->dropDownList($model, 'id_classeur', GxHtml::listDataEx(Classeur::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_classeur'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_photo'); ?>
		<?php echo $form->dropDownList($model, 'id_photo', GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_photo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_photo_mini'); ?>
		<?php echo $form->dropDownList($model, 'id_photo_mini', GxHtml::listDataEx(Feuille::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_photo_mini'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'site_internet'); ?>
		<?php echo $form->textField($model, 'site_internet', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'site_internet'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_langue'); ?>
		<?php echo $form->dropDownList($model, 'id_langue', GxHtml::listDataEx(Langue::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_langue'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lieu_naissance'); ?>
		<?php echo $form->textField($model, 'lieu_naissance', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'lieu_naissance'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('fonctionDates')); ?></label>
		<?php echo $form->checkBoxList($model, 'fonctionDates', GxHtml::encodeEx(GxHtml::listDataEx(FonctionDate::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('piloteVolLogs')); ?></label>
		<?php echo $form->checkBoxList($model, 'piloteVolLogs', GxHtml::encodeEx(GxHtml::listDataEx(PiloteVolLog::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('statTempos')); ?></label>
		<?php echo $form->checkBoxList($model, 'statTempos', GxHtml::encodeEx(GxHtml::listDataEx(StatTempo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('evenementPilotes')); ?></label>
		<?php echo $form->checkBoxList($model, 'evenementPilotes', GxHtml::encodeEx(GxHtml::listDataEx(EvenementPilote::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('treuilRetrocessions')); ?></label>
		<?php echo $form->checkBoxList($model, 'treuilRetrocessions', GxHtml::encodeEx(GxHtml::listDataEx(TreuilRetrocession::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('forfaitPilotes')); ?></label>
		<?php echo $form->checkBoxList($model, 'forfaitPilotes', GxHtml::encodeEx(GxHtml::listDataEx(ForfaitPilote::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tarifTypeHistos')); ?></label>
		<?php echo $form->checkBoxList($model, 'tarifTypeHistos', GxHtml::encodeEx(GxHtml::listDataEx(TarifTypeHisto::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('comptes')); ?></label>
		<?php echo $form->checkBoxList($model, 'comptes', GxHtml::encodeEx(GxHtml::listDataEx(Compte::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('hebergements')); ?></label>
		<?php echo $form->checkBoxList($model, 'hebergements', GxHtml::encodeEx(GxHtml::listDataEx(Hebergement::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('fabriquants')); ?></label>
		<?php echo $form->checkBoxList($model, 'fabriquants', GxHtml::encodeEx(GxHtml::listDataEx(Fabriquant::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('utilisateurs')); ?></label>
		<?php echo $form->checkBoxList($model, 'utilisateurs', GxHtml::encodeEx(GxHtml::listDataEx(Utilisateur::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('planParts')); ?></label>
		<?php echo $form->checkBoxList($model, 'planParts', GxHtml::encodeEx(GxHtml::listDataEx(PlanPart::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('netCoupes')); ?></label>
		<?php echo $form->checkBoxList($model, 'netCoupes', GxHtml::encodeEx(GxHtml::listDataEx(NetCoupe::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('piloteVols')); ?></label>
		<?php echo $form->checkBoxList($model, 'piloteVols', GxHtml::encodeEx(GxHtml::listDataEx(PiloteVol::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('clubs')); ?></label>
		<?php echo $form->checkBoxList($model, 'clubs', GxHtml::encodeEx(GxHtml::listDataEx(Club::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('pilotes')); ?></label>
		<?php echo $form->checkBoxList($model, 'pilotes', GxHtml::encodeEx(GxHtml::listDataEx(Pilote::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('pilotes1')); ?></label>
		<?php echo $form->checkBoxList($model, 'pilotes1', GxHtml::encodeEx(GxHtml::listDataEx(Pilote::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('aeronefSituations')); ?></label>
		<?php echo $form->checkBoxList($model, 'aeronefSituations', GxHtml::encodeEx(GxHtml::listDataEx(AeronefSituation::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('compteGnavs')); ?></label>
		<?php echo $form->checkBoxList($model, 'compteGnavs', GxHtml::encodeEx(GxHtml::listDataEx(CompteGnav::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('demandeStages')); ?></label>
		<?php echo $form->checkBoxList($model, 'demandeStages', GxHtml::encodeEx(GxHtml::listDataEx(DemandeStage::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->