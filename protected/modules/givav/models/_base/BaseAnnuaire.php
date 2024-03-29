<?php

/**
 * This is the model base class for the table "annuaire".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Annuaire".
 *
 * Columns in table "annuaire" available as properties of the model,
 * followed by relations of table "annuaire" available as properties of the model.
 *
 * @property integer $id_annu
 * @property string $civilite
 * @property string $nom_prenom
 * @property string $adresse_1
 * @property string $adresse_2
 * @property string $code_postal
 * @property string $ville
 * @property string $pays
 * @property string $tel_perso
 * @property string $tel_mobile
 * @property string $tel_prof
 * @property string $fax
 * @property string $e_mail_perso
 * @property string $e_mail_pro
 * @property string $mot_de_passe
 * @property string $date_naissance
 * @property string $sexe
 * @property integer $id_classeur
 * @property integer $id_photo
 * @property integer $id_photo_mini
 * @property string $site_internet
 * @property integer $id_langue
 * @property string $lieu_naissance
 *
 * @property FonctionDate[] $fonctionDates
 * @property PiloteVolLog[] $piloteVolLogs
 * @property StatTempo[] $statTempos
 * @property EvenementPilote[] $evenementPilotes
 * @property TreuilRetrocession[] $treuilRetrocessions
 * @property ForfaitPilote[] $forfaitPilotes
 * @property TarifTypeHisto[] $tarifTypeHistos
 * @property Compte[] $comptes
 * @property Hebergement[] $hebergements
 * @property Fabriquant[] $fabriquants
 * @property Utilisateur[] $utilisateurs
 * @property PlanPart[] $planParts
 * @property NetCoupe[] $netCoupes
 * @property PiloteVol[] $piloteVols
 * @property Langue $idLangue
 * @property Classeur $idClasseur
 * @property Feuille $idPhoto
 * @property Feuille $idPhotoMini
 * @property Pays $pays0
 * @property Civilite $civilite0
 * @property Club[] $clubs
 * @property Pilote[] $pilotes
 * @property Pilote[] $pilotes1
 * @property AeronefSituation[] $aeronefSituations
 * @property CompteGnav[] $compteGnavs
 * @property DemandeStage[] $demandeStages
 */
abstract class BaseAnnuaire extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'annuaire';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Annuaire|Annuaires', $n);
	}

	public static function representingColumn() {
		return 'nom_prenom';
	}

	public function rules() {
		return array(
			array('id_classeur, id_photo, id_photo_mini, id_langue', 'numerical', 'integerOnly'=>true),
			array('civilite', 'length', 'max'=>5),
			array('nom_prenom, adresse_1, adresse_2, ville, pays, fax, e_mail_perso, e_mail_pro, lieu_naissance', 'length', 'max'=>60),
			array('code_postal', 'length', 'max'=>15),
			array('tel_perso, tel_mobile, tel_prof', 'length', 'max'=>25),
			array('mot_de_passe', 'length', 'max'=>20),
			array('sexe', 'length', 'max'=>1),
			array('site_internet', 'length', 'max'=>255),
			array('date_naissance', 'safe'),
			array('civilite, nom_prenom, adresse_1, adresse_2, code_postal, ville, pays, tel_perso, tel_mobile, tel_prof, fax, e_mail_perso, e_mail_pro, mot_de_passe, date_naissance, sexe, id_classeur, id_photo, id_photo_mini, site_internet, id_langue, lieu_naissance', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_annu, civilite, nom_prenom, adresse_1, adresse_2, code_postal, ville, pays, tel_perso, tel_mobile, tel_prof, fax, e_mail_perso, e_mail_pro, mot_de_passe, date_naissance, sexe, id_classeur, id_photo, id_photo_mini, site_internet, id_langue, lieu_naissance', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'fonctionDates' => array(self::HAS_MANY, 'FonctionDate', 'id_annu'),
			'piloteVolLogs' => array(self::HAS_MANY, 'PiloteVolLog', 'id_annu'),
			'statTempos' => array(self::HAS_MANY, 'StatTempo', 'id_annu'),
			'evenementPilotes' => array(self::HAS_MANY, 'EvenementPilote', 'id_annu'),
			'treuilRetrocessions' => array(self::HAS_MANY, 'TreuilRetrocession', 'id_annu'),
			'forfaitPilotes' => array(self::HAS_MANY, 'ForfaitPilote', 'id_annu'),
			'tarifTypeHistos' => array(self::HAS_MANY, 'TarifTypeHisto', 'id_annu'),
			'comptes' => array(self::HAS_MANY, 'Compte', 'id_annu'),
			'hebergements' => array(self::HAS_MANY, 'Hebergement', 'id_annu'),
			'fabriquants' => array(self::HAS_MANY, 'Fabriquant', 'id_annu'),
			'utilisateurs' => array(self::HAS_MANY, 'Utilisateur', 'id_annu'),
			'planParts' => array(self::HAS_MANY, 'PlanPart', 'id_annu'),
			'netCoupes' => array(self::HAS_MANY, 'NetCoupe', 'id_annu'),
			'piloteVols' => array(self::HAS_MANY, 'PiloteVol', 'id_annu'),
			'idLangue' => array(self::BELONGS_TO, 'Langue', 'id_langue'),
			'idClasseur' => array(self::BELONGS_TO, 'Classeur', 'id_classeur'),
			'idPhoto' => array(self::BELONGS_TO, 'Feuille', 'id_photo'),
			'idPhotoMini' => array(self::BELONGS_TO, 'Feuille', 'id_photo_mini'),
			'pays0' => array(self::BELONGS_TO, 'Pays', 'pays'),
			'civilite0' => array(self::BELONGS_TO, 'Civilite', 'civilite'),
			'clubs' => array(self::HAS_MANY, 'Club', 'id_annu'),
			'pilotes' => array(self::HAS_MANY, 'Pilote', 'id_annu'),
			'pilotes1' => array(self::HAS_MANY, 'Pilote', 'id_contact'),
			'aeronefSituations' => array(self::MANY_MANY, 'AeronefSituation', 'aeronef_situation_benef(id_annu, id_aeronef_situation)'),
			'compteGnavs' => array(self::HAS_MANY, 'CompteGnav', 'id_annu'),
			'demandeStages' => array(self::HAS_MANY, 'DemandeStage', 'id_contact'),
		);
	}

	public function pivotModels() {
		return array(
			'aeronefSituations' => 'AeronefSituationBenef',
		);
	}

	public function attributeLabels() {
		return array(
			'id_annu' => Yii::t('app', 'Id Annu'),
			'civilite' => null,
			'nom_prenom' => Yii::t('app', 'Nom Prenom'),
			'adresse_1' => Yii::t('app', 'Adresse 1'),
			'adresse_2' => Yii::t('app', 'Adresse 2'),
			'code_postal' => Yii::t('app', 'Code Postal'),
			'ville' => Yii::t('app', 'Ville'),
			'pays' => null,
			'tel_perso' => Yii::t('app', 'Tel Perso'),
			'tel_mobile' => Yii::t('app', 'Tel Mobile'),
			'tel_prof' => Yii::t('app', 'Tel Prof'),
			'fax' => Yii::t('app', 'Fax'),
			'e_mail_perso' => Yii::t('app', 'E Mail Perso'),
			'e_mail_pro' => Yii::t('app', 'E Mail Pro'),
			'mot_de_passe' => Yii::t('app', 'Mot De Passe'),
			'date_naissance' => Yii::t('app', 'Date Naissance'),
			'sexe' => Yii::t('app', 'Sexe'),
			'id_classeur' => null,
			'id_photo' => null,
			'id_photo_mini' => null,
			'site_internet' => Yii::t('app', 'Site Internet'),
			'id_langue' => null,
			'lieu_naissance' => Yii::t('app', 'Lieu Naissance'),
			'fonctionDates' => null,
			'piloteVolLogs' => null,
			'statTempos' => null,
			'evenementPilotes' => null,
			'treuilRetrocessions' => null,
			'forfaitPilotes' => null,
			'tarifTypeHistos' => null,
			'comptes' => null,
			'hebergements' => null,
			'fabriquants' => null,
			'utilisateurs' => null,
			'planParts' => null,
			'netCoupes' => null,
			'piloteVols' => null,
			'idLangue' => null,
			'idClasseur' => null,
			'idPhoto' => null,
			'idPhotoMini' => null,
			'pays0' => null,
			'civilite0' => null,
			'clubs' => null,
			'pilotes' => null,
			'pilotes1' => null,
			'aeronefSituations' => null,
			'compteGnavs' => null,
			'demandeStages' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_annu', $this->id_annu);
		$criteria->compare('civilite', $this->civilite);
		$criteria->compare('nom_prenom', $this->nom_prenom, true);
		$criteria->compare('adresse_1', $this->adresse_1, true);
		$criteria->compare('adresse_2', $this->adresse_2, true);
		$criteria->compare('code_postal', $this->code_postal, true);
		$criteria->compare('ville', $this->ville, true);
		$criteria->compare('pays', $this->pays);
		$criteria->compare('tel_perso', $this->tel_perso, true);
		$criteria->compare('tel_mobile', $this->tel_mobile, true);
		$criteria->compare('tel_prof', $this->tel_prof, true);
		$criteria->compare('fax', $this->fax, true);
		$criteria->compare('e_mail_perso', $this->e_mail_perso, true);
		$criteria->compare('e_mail_pro', $this->e_mail_pro, true);
		$criteria->compare('mot_de_passe', $this->mot_de_passe, true);
		$criteria->compare('date_naissance', $this->date_naissance, true);
		$criteria->compare('sexe', $this->sexe, true);
		$criteria->compare('id_classeur', $this->id_classeur);
		$criteria->compare('id_photo', $this->id_photo);
		$criteria->compare('id_photo_mini', $this->id_photo_mini);
		$criteria->compare('site_internet', $this->site_internet, true);
		$criteria->compare('id_langue', $this->id_langue);
		$criteria->compare('lieu_naissance', $this->lieu_naissance, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
