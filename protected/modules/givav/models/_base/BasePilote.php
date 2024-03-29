<?php

/**
 * This is the model base class for the table "pilote".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Pilote".
 *
 * Columns in table "pilote" available as properties of the model,
 * followed by relations of table "pilote" available as properties of the model.
 *
 * @property integer $id_pilote
 * @property integer $id_annu
 * @property integer $id_club
 * @property string $trigram_instructeur
 * @property string $trigram_remorqueur
 * @property string $trigram_treuilleur
 * @property boolean $pilote_actif
 * @property boolean $pilote_actif_3
 * @property integer $id_compte
 * @property string $type_instructeur
 * @property string $date_valid_instructeur
 * @property integer $annee_act_instructeur
 * @property string $date_valid_remorqueur
 * @property string $trigram_pilote_vi
 * @property integer $heure_tot_pilote_vi
 * @property integer $heure_an_pilote_vi
 * @property string $date_bia
 * @property string $reference_bia
 * @property string $date_lache
 * @property string $reference_lache
 * @property string $date_vol_1h
 * @property string $no_instructeur
 * @property string $date_bpp_theorique
 * @property string $reference_bpp_theorique
 * @property string $date_bpp_pratique
 * @property string $reference_bpp_pratique
 * @property string $no_licence_pp
 * @property string $date_visite_medicale
 * @property string $date_controle_competences
 * @property string $date_emport_passager
 * @property string $reference_emport_passager
 * @property string $date_moto_planeur
 * @property string $reference_moto_planeur
 * @property string $date_ec_vol1_itv
 * @property string $reference_ec_vol1_itv
 * @property string $date_ec_vol2_itv
 * @property string $reference_ec_vol2_itv
 * @property string $date_ec_vol3_itv
 * @property string $reference_ec_vol3_itv
 * @property string $date_ec_attero_ext_inst
 * @property string $reference_ec_attero_ext_inst
 * @property string $date_ec_attero_ext_solo
 * @property string $reference_ec_attero_ext_solo
 * @property string $date_circuit_90km
 * @property string $date_auth_campagne
 * @property string $reference_auth_campagne
 * @property string $badge_d_1000m
 * @property string $badge_d_5h
 * @property string $badge_d_50km
 * @property string $badge_e_300km
 * @property string $badge_e_3000m
 * @property string $badge_f_300km
 * @property string $badge_f_500km
 * @property string $badge_f_5000m
 * @property string $vol_750km
 * @property string $vol_1000km
 * @property boolean $ok_pilote_vi
 * @property integer $id_contact
 * @property integer $annee_debut
 * @property integer $heures_montagne
 *
 * @property Grille[] $grilles
 * @property Stage[] $stages
 * @property Annuaire $idAnnu
 * @property Club $idClub
 * @property Compte $idCompte
 * @property Annuaire $idContact
 * @property DemandeStage[] $demandeStages
 */
abstract class BasePilote extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'pilote';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Pilote|Pilotes', $n);
	}

	public static function representingColumn() {
		return 'trigram_instructeur';
	}

	public function rules() {
		return array(
			array('id_annu, id_compte', 'required'),
			array('id_annu, id_club, id_compte, annee_act_instructeur, heure_tot_pilote_vi, heure_an_pilote_vi, id_contact, annee_debut, heures_montagne', 'numerical', 'integerOnly'=>true),
			array('trigram_instructeur, trigram_remorqueur, trigram_treuilleur, trigram_pilote_vi', 'length', 'max'=>5),
			array('type_instructeur', 'length', 'max'=>1),
			array('reference_bia, reference_lache, reference_bpp_theorique, reference_bpp_pratique, reference_emport_passager, reference_moto_planeur, reference_ec_vol1_itv, reference_ec_vol2_itv, reference_ec_vol3_itv, reference_ec_attero_ext_inst, reference_ec_attero_ext_solo, reference_auth_campagne', 'length', 'max'=>255),
			array('no_instructeur, no_licence_pp', 'length', 'max'=>30),
			array('pilote_actif, pilote_actif_3, date_valid_instructeur, date_valid_remorqueur, date_bia, date_lache, date_vol_1h, date_bpp_theorique, date_bpp_pratique, date_visite_medicale, date_controle_competences, date_emport_passager, date_moto_planeur, date_ec_vol1_itv, date_ec_vol2_itv, date_ec_vol3_itv, date_ec_attero_ext_inst, date_ec_attero_ext_solo, date_circuit_90km, date_auth_campagne, badge_d_1000m, badge_d_5h, badge_d_50km, badge_e_300km, badge_e_3000m, badge_f_300km, badge_f_500km, badge_f_5000m, vol_750km, vol_1000km, ok_pilote_vi', 'safe'),
			array('id_club, trigram_instructeur, trigram_remorqueur, trigram_treuilleur, pilote_actif, pilote_actif_3, type_instructeur, date_valid_instructeur, annee_act_instructeur, date_valid_remorqueur, trigram_pilote_vi, heure_tot_pilote_vi, heure_an_pilote_vi, date_bia, reference_bia, date_lache, reference_lache, date_vol_1h, no_instructeur, date_bpp_theorique, reference_bpp_theorique, date_bpp_pratique, reference_bpp_pratique, no_licence_pp, date_visite_medicale, date_controle_competences, date_emport_passager, reference_emport_passager, date_moto_planeur, reference_moto_planeur, date_ec_vol1_itv, reference_ec_vol1_itv, date_ec_vol2_itv, reference_ec_vol2_itv, date_ec_vol3_itv, reference_ec_vol3_itv, date_ec_attero_ext_inst, reference_ec_attero_ext_inst, date_ec_attero_ext_solo, reference_ec_attero_ext_solo, date_circuit_90km, date_auth_campagne, reference_auth_campagne, badge_d_1000m, badge_d_5h, badge_d_50km, badge_e_300km, badge_e_3000m, badge_f_300km, badge_f_500km, badge_f_5000m, vol_750km, vol_1000km, ok_pilote_vi, id_contact, annee_debut, heures_montagne', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_pilote, id_annu, id_club, trigram_instructeur, trigram_remorqueur, trigram_treuilleur, pilote_actif, pilote_actif_3, id_compte, type_instructeur, date_valid_instructeur, annee_act_instructeur, date_valid_remorqueur, trigram_pilote_vi, heure_tot_pilote_vi, heure_an_pilote_vi, date_bia, reference_bia, date_lache, reference_lache, date_vol_1h, no_instructeur, date_bpp_theorique, reference_bpp_theorique, date_bpp_pratique, reference_bpp_pratique, no_licence_pp, date_visite_medicale, date_controle_competences, date_emport_passager, reference_emport_passager, date_moto_planeur, reference_moto_planeur, date_ec_vol1_itv, reference_ec_vol1_itv, date_ec_vol2_itv, reference_ec_vol2_itv, date_ec_vol3_itv, reference_ec_vol3_itv, date_ec_attero_ext_inst, reference_ec_attero_ext_inst, date_ec_attero_ext_solo, reference_ec_attero_ext_solo, date_circuit_90km, date_auth_campagne, reference_auth_campagne, badge_d_1000m, badge_d_5h, badge_d_50km, badge_e_300km, badge_e_3000m, badge_f_300km, badge_f_500km, badge_f_5000m, vol_750km, vol_1000km, ok_pilote_vi, id_contact, annee_debut, heures_montagne', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'grilles' => array(self::HAS_MANY, 'Grille', 'id_pilote'),
			'stages' => array(self::HAS_MANY, 'Stage', 'id_pilote'),
			'idAnnu' => array(self::BELONGS_TO, 'Annuaire', 'id_annu'),
			'idClub' => array(self::BELONGS_TO, 'Club', 'id_club'),
			'idCompte' => array(self::BELONGS_TO, 'Compte', 'id_compte'),
			'idContact' => array(self::BELONGS_TO, 'Annuaire', 'id_contact'),
			'demandeStages' => array(self::HAS_MANY, 'DemandeStage', 'id_pilote'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_pilote' => Yii::t('app', 'Id Pilote'),
			'id_annu' => null,
			'id_club' => null,
			'trigram_instructeur' => Yii::t('app', 'Trigram Instructeur'),
			'trigram_remorqueur' => Yii::t('app', 'Trigram Remorqueur'),
			'trigram_treuilleur' => Yii::t('app', 'Trigram Treuilleur'),
			'pilote_actif' => Yii::t('app', 'Pilote Actif'),
			'pilote_actif_3' => Yii::t('app', 'Pilote Actif 3'),
			'id_compte' => null,
			'type_instructeur' => Yii::t('app', 'Type Instructeur'),
			'date_valid_instructeur' => Yii::t('app', 'Date Valid Instructeur'),
			'annee_act_instructeur' => Yii::t('app', 'Annee Act Instructeur'),
			'date_valid_remorqueur' => Yii::t('app', 'Date Valid Remorqueur'),
			'trigram_pilote_vi' => Yii::t('app', 'Trigram Pilote Vi'),
			'heure_tot_pilote_vi' => Yii::t('app', 'Heure Tot Pilote Vi'),
			'heure_an_pilote_vi' => Yii::t('app', 'Heure An Pilote Vi'),
			'date_bia' => Yii::t('app', 'Date Bia'),
			'reference_bia' => Yii::t('app', 'Reference Bia'),
			'date_lache' => Yii::t('app', 'Date Lache'),
			'reference_lache' => Yii::t('app', 'Reference Lache'),
			'date_vol_1h' => Yii::t('app', 'Date Vol 1h'),
			'no_instructeur' => Yii::t('app', 'No Instructeur'),
			'date_bpp_theorique' => Yii::t('app', 'Date Bpp Theorique'),
			'reference_bpp_theorique' => Yii::t('app', 'Reference Bpp Theorique'),
			'date_bpp_pratique' => Yii::t('app', 'Date Bpp Pratique'),
			'reference_bpp_pratique' => Yii::t('app', 'Reference Bpp Pratique'),
			'no_licence_pp' => Yii::t('app', 'No Licence Pp'),
			'date_visite_medicale' => Yii::t('app', 'Date Visite Medicale'),
			'date_controle_competences' => Yii::t('app', 'Date Controle Competences'),
			'date_emport_passager' => Yii::t('app', 'Date Emport Passager'),
			'reference_emport_passager' => Yii::t('app', 'Reference Emport Passager'),
			'date_moto_planeur' => Yii::t('app', 'Date Moto Planeur'),
			'reference_moto_planeur' => Yii::t('app', 'Reference Moto Planeur'),
			'date_ec_vol1_itv' => Yii::t('app', 'Date Ec Vol1 Itv'),
			'reference_ec_vol1_itv' => Yii::t('app', 'Reference Ec Vol1 Itv'),
			'date_ec_vol2_itv' => Yii::t('app', 'Date Ec Vol2 Itv'),
			'reference_ec_vol2_itv' => Yii::t('app', 'Reference Ec Vol2 Itv'),
			'date_ec_vol3_itv' => Yii::t('app', 'Date Ec Vol3 Itv'),
			'reference_ec_vol3_itv' => Yii::t('app', 'Reference Ec Vol3 Itv'),
			'date_ec_attero_ext_inst' => Yii::t('app', 'Date Ec Attero Ext Inst'),
			'reference_ec_attero_ext_inst' => Yii::t('app', 'Reference Ec Attero Ext Inst'),
			'date_ec_attero_ext_solo' => Yii::t('app', 'Date Ec Attero Ext Solo'),
			'reference_ec_attero_ext_solo' => Yii::t('app', 'Reference Ec Attero Ext Solo'),
			'date_circuit_90km' => Yii::t('app', 'Date Circuit 90km'),
			'date_auth_campagne' => Yii::t('app', 'Date Auth Campagne'),
			'reference_auth_campagne' => Yii::t('app', 'Reference Auth Campagne'),
			'badge_d_1000m' => Yii::t('app', 'Badge D 1000m'),
			'badge_d_5h' => Yii::t('app', 'Badge D 5h'),
			'badge_d_50km' => Yii::t('app', 'Badge D 50km'),
			'badge_e_300km' => Yii::t('app', 'Badge E 300km'),
			'badge_e_3000m' => Yii::t('app', 'Badge E 3000m'),
			'badge_f_300km' => Yii::t('app', 'Badge F 300km'),
			'badge_f_500km' => Yii::t('app', 'Badge F 500km'),
			'badge_f_5000m' => Yii::t('app', 'Badge F 5000m'),
			'vol_750km' => Yii::t('app', 'Vol 750km'),
			'vol_1000km' => Yii::t('app', 'Vol 1000km'),
			'ok_pilote_vi' => Yii::t('app', 'Ok Pilote Vi'),
			'id_contact' => null,
			'annee_debut' => Yii::t('app', 'Annee Debut'),
			'heures_montagne' => Yii::t('app', 'Heures Montagne'),
			'grilles' => null,
			'stages' => null,
			'idAnnu' => null,
			'idClub' => null,
			'idCompte' => null,
			'idContact' => null,
			'demandeStages' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_pilote', $this->id_pilote);
		$criteria->compare('id_annu', $this->id_annu);
		$criteria->compare('id_club', $this->id_club);
		$criteria->compare('trigram_instructeur', $this->trigram_instructeur, true);
		$criteria->compare('trigram_remorqueur', $this->trigram_remorqueur, true);
		$criteria->compare('trigram_treuilleur', $this->trigram_treuilleur, true);
		$criteria->compare('pilote_actif', $this->pilote_actif);
		$criteria->compare('pilote_actif_3', $this->pilote_actif_3);
		$criteria->compare('id_compte', $this->id_compte);
		$criteria->compare('type_instructeur', $this->type_instructeur, true);
		$criteria->compare('date_valid_instructeur', $this->date_valid_instructeur, true);
		$criteria->compare('annee_act_instructeur', $this->annee_act_instructeur);
		$criteria->compare('date_valid_remorqueur', $this->date_valid_remorqueur, true);
		$criteria->compare('trigram_pilote_vi', $this->trigram_pilote_vi, true);
		$criteria->compare('heure_tot_pilote_vi', $this->heure_tot_pilote_vi);
		$criteria->compare('heure_an_pilote_vi', $this->heure_an_pilote_vi);
		$criteria->compare('date_bia', $this->date_bia, true);
		$criteria->compare('reference_bia', $this->reference_bia, true);
		$criteria->compare('date_lache', $this->date_lache, true);
		$criteria->compare('reference_lache', $this->reference_lache, true);
		$criteria->compare('date_vol_1h', $this->date_vol_1h, true);
		$criteria->compare('no_instructeur', $this->no_instructeur, true);
		$criteria->compare('date_bpp_theorique', $this->date_bpp_theorique, true);
		$criteria->compare('reference_bpp_theorique', $this->reference_bpp_theorique, true);
		$criteria->compare('date_bpp_pratique', $this->date_bpp_pratique, true);
		$criteria->compare('reference_bpp_pratique', $this->reference_bpp_pratique, true);
		$criteria->compare('no_licence_pp', $this->no_licence_pp, true);
		$criteria->compare('date_visite_medicale', $this->date_visite_medicale, true);
		$criteria->compare('date_controle_competences', $this->date_controle_competences, true);
		$criteria->compare('date_emport_passager', $this->date_emport_passager, true);
		$criteria->compare('reference_emport_passager', $this->reference_emport_passager, true);
		$criteria->compare('date_moto_planeur', $this->date_moto_planeur, true);
		$criteria->compare('reference_moto_planeur', $this->reference_moto_planeur, true);
		$criteria->compare('date_ec_vol1_itv', $this->date_ec_vol1_itv, true);
		$criteria->compare('reference_ec_vol1_itv', $this->reference_ec_vol1_itv, true);
		$criteria->compare('date_ec_vol2_itv', $this->date_ec_vol2_itv, true);
		$criteria->compare('reference_ec_vol2_itv', $this->reference_ec_vol2_itv, true);
		$criteria->compare('date_ec_vol3_itv', $this->date_ec_vol3_itv, true);
		$criteria->compare('reference_ec_vol3_itv', $this->reference_ec_vol3_itv, true);
		$criteria->compare('date_ec_attero_ext_inst', $this->date_ec_attero_ext_inst, true);
		$criteria->compare('reference_ec_attero_ext_inst', $this->reference_ec_attero_ext_inst, true);
		$criteria->compare('date_ec_attero_ext_solo', $this->date_ec_attero_ext_solo, true);
		$criteria->compare('reference_ec_attero_ext_solo', $this->reference_ec_attero_ext_solo, true);
		$criteria->compare('date_circuit_90km', $this->date_circuit_90km, true);
		$criteria->compare('date_auth_campagne', $this->date_auth_campagne, true);
		$criteria->compare('reference_auth_campagne', $this->reference_auth_campagne, true);
		$criteria->compare('badge_d_1000m', $this->badge_d_1000m, true);
		$criteria->compare('badge_d_5h', $this->badge_d_5h, true);
		$criteria->compare('badge_d_50km', $this->badge_d_50km, true);
		$criteria->compare('badge_e_300km', $this->badge_e_300km, true);
		$criteria->compare('badge_e_3000m', $this->badge_e_3000m, true);
		$criteria->compare('badge_f_300km', $this->badge_f_300km, true);
		$criteria->compare('badge_f_500km', $this->badge_f_500km, true);
		$criteria->compare('badge_f_5000m', $this->badge_f_5000m, true);
		$criteria->compare('vol_750km', $this->vol_750km, true);
		$criteria->compare('vol_1000km', $this->vol_1000km, true);
		$criteria->compare('ok_pilote_vi', $this->ok_pilote_vi);
		$criteria->compare('id_contact', $this->id_contact);
		$criteria->compare('annee_debut', $this->annee_debut);
		$criteria->compare('heures_montagne', $this->heures_montagne);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
