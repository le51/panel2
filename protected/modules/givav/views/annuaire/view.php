<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_annu)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_annu), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_annu',
array(
			'name' => 'civilite0',
			'type' => 'raw',
			'value' => $model->civilite0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->civilite0)), array('civilite/view', 'id' => GxActiveRecord::extractPkValue($model->civilite0, true))) : null,
			),
'nom_prenom',
'adresse_1',
'adresse_2',
'code_postal',
'ville',
array(
			'name' => 'pays0',
			'type' => 'raw',
			'value' => $model->pays0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->pays0)), array('pays/view', 'id' => GxActiveRecord::extractPkValue($model->pays0, true))) : null,
			),
'tel_perso',
'tel_mobile',
'tel_prof',
'fax',
'e_mail_perso',
'e_mail_pro',
'mot_de_passe',
'date_naissance',
'sexe',
array(
			'name' => 'idClasseur',
			'type' => 'raw',
			'value' => $model->idClasseur !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idClasseur)), array('classeur/view', 'id' => GxActiveRecord::extractPkValue($model->idClasseur, true))) : null,
			),
array(
			'name' => 'idPhoto',
			'type' => 'raw',
			'value' => $model->idPhoto !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idPhoto)), array('feuille/view', 'id' => GxActiveRecord::extractPkValue($model->idPhoto, true))) : null,
			),
array(
			'name' => 'idPhotoMini',
			'type' => 'raw',
			'value' => $model->idPhotoMini !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idPhotoMini)), array('feuille/view', 'id' => GxActiveRecord::extractPkValue($model->idPhotoMini, true))) : null,
			),
'site_internet',
array(
			'name' => 'idLangue',
			'type' => 'raw',
			'value' => $model->idLangue !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idLangue)), array('langue/view', 'id' => GxActiveRecord::extractPkValue($model->idLangue, true))) : null,
			),
'lieu_naissance',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('fonctionDates')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->fonctionDates as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('fonctionDate/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('piloteVolLogs')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->piloteVolLogs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('piloteVolLog/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('statTempos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->statTempos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('statTempo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('evenementPilotes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->evenementPilotes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('evenementPilote/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('treuilRetrocessions')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->treuilRetrocessions as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('treuilRetrocession/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('forfaitPilotes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->forfaitPilotes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('forfaitPilote/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('tarifTypeHistos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tarifTypeHistos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tarifTypeHisto/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('comptes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->comptes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('compte/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('hebergements')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->hebergements as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('hebergement/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('fabriquants')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->fabriquants as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('fabriquant/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('utilisateurs')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->utilisateurs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('utilisateur/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('planParts')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->planParts as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('planPart/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('netCoupes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->netCoupes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('netCoupe/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('piloteVols')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->piloteVols as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('piloteVol/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('clubs')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->clubs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('club/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('pilotes')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->pilotes as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('pilote/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('pilotes1')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->pilotes1 as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('pilote/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('aeronefSituations')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->aeronefSituations as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('aeronefSituation/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('compteGnavs')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->compteGnavs as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('compteGnav/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('demandeStages')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->demandeStages as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('demandeStage/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>