<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_annu')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_annu), array('view', 'id' => $data->id_annu)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('civilite')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->civilite0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nom_prenom')); ?>:
	<?php echo GxHtml::encode($data->nom_prenom); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('adresse_1')); ?>:
	<?php echo GxHtml::encode($data->adresse_1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('adresse_2')); ?>:
	<?php echo GxHtml::encode($data->adresse_2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('code_postal')); ?>:
	<?php echo GxHtml::encode($data->code_postal); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ville')); ?>:
	<?php echo GxHtml::encode($data->ville); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('pays')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->pays0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tel_perso')); ?>:
	<?php echo GxHtml::encode($data->tel_perso); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tel_mobile')); ?>:
	<?php echo GxHtml::encode($data->tel_mobile); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tel_prof')); ?>:
	<?php echo GxHtml::encode($data->tel_prof); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fax')); ?>:
	<?php echo GxHtml::encode($data->fax); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('e_mail_perso')); ?>:
	<?php echo GxHtml::encode($data->e_mail_perso); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('e_mail_pro')); ?>:
	<?php echo GxHtml::encode($data->e_mail_pro); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('mot_de_passe')); ?>:
	<?php echo GxHtml::encode($data->mot_de_passe); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('date_naissance')); ?>:
	<?php echo GxHtml::encode($data->date_naissance); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sexe')); ?>:
	<?php echo GxHtml::encode($data->sexe); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_classeur')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idClasseur)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_photo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idPhoto)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_photo_mini')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idPhotoMini)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('site_internet')); ?>:
	<?php echo GxHtml::encode($data->site_internet); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_langue')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idLangue)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lieu_naissance')); ?>:
	<?php echo GxHtml::encode($data->lieu_naissance); ?>
	<br />
	*/ ?>

</div>