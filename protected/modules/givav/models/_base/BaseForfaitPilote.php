<?php

/**
 * This is the model base class for the table "forfait_pilote".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ForfaitPilote".
 *
 * Columns in table "forfait_pilote" available as properties of the model,
 * followed by relations of table "forfait_pilote" available as properties of the model.
 *
 * @property integer $id_forfait_pilote
 * @property integer $id_annu
 * @property integer $id_forfait_modele
 * @property string $date_debut
 * @property string $date_fin
 * @property integer $nb_cellule
 * @property string $hrs_cellule
 * @property integer $nb_moteur
 * @property string $hrs_moteur
 * @property integer $nb_remorque
 * @property string $hrs_remorque
 * @property integer $nb_treuillee
 * @property integer $nb_simu
 * @property string $hrs_simu
 * @property string $conso_nb_cellule
 * @property string $conso_hrs_cellule
 * @property string $conso_nb_moteur
 * @property string $conso_hrs_moteur
 * @property string $conso_nb_remorque
 * @property string $conso_hrs_remorque
 * @property string $conso_nb_treuillee
 * @property string $conso_nb_simu
 * @property string $conso_hrs_simu
 * @property integer $id_forfait_pilote_origine
 * @property integer $id_eve_pil
 *
 * @property Annuaire $idAnnu
 * @property EvenementPilote $idEvePil
 * @property ForfaitModele $idForfaitModele
 * @property ForfaitPilote $idForfaitPiloteOrigine
 * @property ForfaitPilote[] $forfaitPilotes
 */
abstract class BaseForfaitPilote extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'forfait_pilote';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ForfaitPilote|ForfaitPilotes', $n);
	}

	public static function representingColumn() {
		return 'date_debut';
	}

	public function rules() {
		return array(
			array('id_annu, id_forfait_modele, date_debut, date_fin, id_eve_pil', 'required'),
			array('id_annu, id_forfait_modele, nb_cellule, nb_moteur, nb_remorque, nb_treuillee, nb_simu, id_forfait_pilote_origine, id_eve_pil', 'numerical', 'integerOnly'=>true),
			array('conso_nb_cellule, conso_nb_moteur, conso_nb_remorque, conso_nb_treuillee, conso_nb_simu', 'length', 'max'=>9),
			array('hrs_cellule, hrs_moteur, hrs_remorque, hrs_simu, conso_hrs_cellule, conso_hrs_moteur, conso_hrs_remorque, conso_hrs_simu', 'safe'),
			array('nb_cellule, hrs_cellule, nb_moteur, hrs_moteur, nb_remorque, hrs_remorque, nb_treuillee, nb_simu, hrs_simu, conso_nb_cellule, conso_hrs_cellule, conso_nb_moteur, conso_hrs_moteur, conso_nb_remorque, conso_hrs_remorque, conso_nb_treuillee, conso_nb_simu, conso_hrs_simu, id_forfait_pilote_origine', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_forfait_pilote, id_annu, id_forfait_modele, date_debut, date_fin, nb_cellule, hrs_cellule, nb_moteur, hrs_moteur, nb_remorque, hrs_remorque, nb_treuillee, nb_simu, hrs_simu, conso_nb_cellule, conso_hrs_cellule, conso_nb_moteur, conso_hrs_moteur, conso_nb_remorque, conso_hrs_remorque, conso_nb_treuillee, conso_nb_simu, conso_hrs_simu, id_forfait_pilote_origine, id_eve_pil', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idAnnu' => array(self::BELONGS_TO, 'Annuaire', 'id_annu'),
			'idEvePil' => array(self::BELONGS_TO, 'EvenementPilote', 'id_eve_pil'),
			'idForfaitModele' => array(self::BELONGS_TO, 'ForfaitModele', 'id_forfait_modele'),
			'idForfaitPiloteOrigine' => array(self::BELONGS_TO, 'ForfaitPilote', 'id_forfait_pilote_origine'),
			'forfaitPilotes' => array(self::HAS_MANY, 'ForfaitPilote', 'id_forfait_pilote_origine'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_forfait_pilote' => Yii::t('app', 'Id Forfait Pilote'),
			'id_annu' => null,
			'id_forfait_modele' => null,
			'date_debut' => Yii::t('app', 'Date Debut'),
			'date_fin' => Yii::t('app', 'Date Fin'),
			'nb_cellule' => Yii::t('app', 'Nb Cellule'),
			'hrs_cellule' => Yii::t('app', 'Hrs Cellule'),
			'nb_moteur' => Yii::t('app', 'Nb Moteur'),
			'hrs_moteur' => Yii::t('app', 'Hrs Moteur'),
			'nb_remorque' => Yii::t('app', 'Nb Remorque'),
			'hrs_remorque' => Yii::t('app', 'Hrs Remorque'),
			'nb_treuillee' => Yii::t('app', 'Nb Treuillee'),
			'nb_simu' => Yii::t('app', 'Nb Simu'),
			'hrs_simu' => Yii::t('app', 'Hrs Simu'),
			'conso_nb_cellule' => Yii::t('app', 'Conso Nb Cellule'),
			'conso_hrs_cellule' => Yii::t('app', 'Conso Hrs Cellule'),
			'conso_nb_moteur' => Yii::t('app', 'Conso Nb Moteur'),
			'conso_hrs_moteur' => Yii::t('app', 'Conso Hrs Moteur'),
			'conso_nb_remorque' => Yii::t('app', 'Conso Nb Remorque'),
			'conso_hrs_remorque' => Yii::t('app', 'Conso Hrs Remorque'),
			'conso_nb_treuillee' => Yii::t('app', 'Conso Nb Treuillee'),
			'conso_nb_simu' => Yii::t('app', 'Conso Nb Simu'),
			'conso_hrs_simu' => Yii::t('app', 'Conso Hrs Simu'),
			'id_forfait_pilote_origine' => null,
			'id_eve_pil' => null,
			'idAnnu' => null,
			'idEvePil' => null,
			'idForfaitModele' => null,
			'idForfaitPiloteOrigine' => null,
			'forfaitPilotes' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_forfait_pilote', $this->id_forfait_pilote);
		$criteria->compare('id_annu', $this->id_annu);
		$criteria->compare('id_forfait_modele', $this->id_forfait_modele);
		$criteria->compare('date_debut', $this->date_debut, true);
		$criteria->compare('date_fin', $this->date_fin, true);
		$criteria->compare('nb_cellule', $this->nb_cellule);
		$criteria->compare('hrs_cellule', $this->hrs_cellule, true);
		$criteria->compare('nb_moteur', $this->nb_moteur);
		$criteria->compare('hrs_moteur', $this->hrs_moteur, true);
		$criteria->compare('nb_remorque', $this->nb_remorque);
		$criteria->compare('hrs_remorque', $this->hrs_remorque, true);
		$criteria->compare('nb_treuillee', $this->nb_treuillee);
		$criteria->compare('nb_simu', $this->nb_simu);
		$criteria->compare('hrs_simu', $this->hrs_simu, true);
		$criteria->compare('conso_nb_cellule', $this->conso_nb_cellule, true);
		$criteria->compare('conso_hrs_cellule', $this->conso_hrs_cellule, true);
		$criteria->compare('conso_nb_moteur', $this->conso_nb_moteur, true);
		$criteria->compare('conso_hrs_moteur', $this->conso_hrs_moteur, true);
		$criteria->compare('conso_nb_remorque', $this->conso_nb_remorque, true);
		$criteria->compare('conso_hrs_remorque', $this->conso_hrs_remorque, true);
		$criteria->compare('conso_nb_treuillee', $this->conso_nb_treuillee, true);
		$criteria->compare('conso_nb_simu', $this->conso_nb_simu, true);
		$criteria->compare('conso_hrs_simu', $this->conso_hrs_simu, true);
		$criteria->compare('id_forfait_pilote_origine', $this->id_forfait_pilote_origine);
		$criteria->compare('id_eve_pil', $this->id_eve_pil);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
