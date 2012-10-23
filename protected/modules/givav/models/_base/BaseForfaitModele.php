<?php

/**
 * This is the model base class for the table "forfait_modele".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ForfaitModele".
 *
 * Columns in table "forfait_modele" available as properties of the model,
 * followed by relations of table "forfait_modele" available as properties of the model.
 *
 * @property integer $id_forfait_modele
 * @property string $nom_forfait
 * @property integer $nb_cellule
 * @property string $hrs_cellule
 * @property integer $nb_moteur
 * @property string $hrs_moteur
 * @property integer $nb_remorque
 * @property string $hrs_remorque
 * @property integer $nb_treuillee
 * @property integer $nb_simu
 * @property string $hrs_simu
 * @property boolean $actif
 * @property integer $id_eve_mod
 *
 * @property TarifCatAeronef[] $tarifCatAeronefs
 * @property Aeronef[] $aeronefs
 * @property EvenementModele $idEveMod
 * @property ForfaitPilote[] $forfaitPilotes
 */
abstract class BaseForfaitModele extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'forfait_modele';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ForfaitModele|ForfaitModeles', $n);
	}

	public static function representingColumn() {
		return 'nom_forfait';
	}

	public function rules() {
		return array(
			array('nom_forfait, id_eve_mod', 'required'),
			array('nb_cellule, nb_moteur, nb_remorque, nb_treuillee, nb_simu, id_eve_mod', 'numerical', 'integerOnly'=>true),
			array('nom_forfait', 'length', 'max'=>255),
			array('hrs_cellule, hrs_moteur, hrs_remorque, hrs_simu, actif', 'safe'),
			array('nb_cellule, hrs_cellule, nb_moteur, hrs_moteur, nb_remorque, hrs_remorque, nb_treuillee, nb_simu, hrs_simu, actif', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_forfait_modele, nom_forfait, nb_cellule, hrs_cellule, nb_moteur, hrs_moteur, nb_remorque, hrs_remorque, nb_treuillee, nb_simu, hrs_simu, actif, id_eve_mod', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tarifCatAeronefs' => array(self::MANY_MANY, 'TarifCatAeronef', 'forfait_modele_cat_complement(id_forfait_modele, id_tarif_cat_aeronef)'),
			'aeronefs' => array(self::MANY_MANY, 'Aeronef', 'forfait_modele_aeronef_exclu(id_forfait_modele, id_aeronef)'),
			'idEveMod' => array(self::BELONGS_TO, 'EvenementModele', 'id_eve_mod'),
			'forfaitPilotes' => array(self::HAS_MANY, 'ForfaitPilote', 'id_forfait_modele'),
		);
	}

	public function pivotModels() {
		return array(
			'tarifCatAeronefs' => 'ForfaitModeleCatComplement',
			'aeronefs' => 'ForfaitModeleAeronefExclu',
		);
	}

	public function attributeLabels() {
		return array(
			'id_forfait_modele' => Yii::t('app', 'Id Forfait Modele'),
			'nom_forfait' => Yii::t('app', 'Nom Forfait'),
			'nb_cellule' => Yii::t('app', 'Nb Cellule'),
			'hrs_cellule' => Yii::t('app', 'Hrs Cellule'),
			'nb_moteur' => Yii::t('app', 'Nb Moteur'),
			'hrs_moteur' => Yii::t('app', 'Hrs Moteur'),
			'nb_remorque' => Yii::t('app', 'Nb Remorque'),
			'hrs_remorque' => Yii::t('app', 'Hrs Remorque'),
			'nb_treuillee' => Yii::t('app', 'Nb Treuillee'),
			'nb_simu' => Yii::t('app', 'Nb Simu'),
			'hrs_simu' => Yii::t('app', 'Hrs Simu'),
			'actif' => Yii::t('app', 'Actif'),
			'id_eve_mod' => null,
			'tarifCatAeronefs' => null,
			'aeronefs' => null,
			'idEveMod' => null,
			'forfaitPilotes' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_forfait_modele', $this->id_forfait_modele);
		$criteria->compare('nom_forfait', $this->nom_forfait, true);
		$criteria->compare('nb_cellule', $this->nb_cellule);
		$criteria->compare('hrs_cellule', $this->hrs_cellule, true);
		$criteria->compare('nb_moteur', $this->nb_moteur);
		$criteria->compare('hrs_moteur', $this->hrs_moteur, true);
		$criteria->compare('nb_remorque', $this->nb_remorque);
		$criteria->compare('hrs_remorque', $this->hrs_remorque, true);
		$criteria->compare('nb_treuillee', $this->nb_treuillee);
		$criteria->compare('nb_simu', $this->nb_simu);
		$criteria->compare('hrs_simu', $this->hrs_simu, true);
		$criteria->compare('actif', $this->actif);
		$criteria->compare('id_eve_mod', $this->id_eve_mod);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}