<?php

/**
 * This is the model base class for the table "aeronef_retrocession".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AeronefRetrocession".
 *
 * Columns in table "aeronef_retrocession" available as properties of the model,
 * followed by relations of table "aeronef_retrocession" available as properties of the model.
 *
 * @property integer $id_aeronef_situation
 * @property string $prix_heure_cellule
 * @property string $max_cellule
 * @property string $prix_heure_moteur
 * @property string $max_moteur
 * @property string $prix_heure_remorque
 * @property string $max_remorque
 * @property string $pourcent_paye_cellule
 * @property string $pourcent_paye_moteur
 * @property string $pourcent_paye_remorque
 * @property boolean $benef_retrocede
 *
 * @property AeronefSituation $idAeronefSituation
 */
abstract class BaseAeronefRetrocession extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'aeronef_retrocession';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'AeronefRetrocession|AeronefRetrocessions', $n);
	}

	public static function representingColumn() {
		return 'prix_heure_cellule';
	}

	public function rules() {
		return array(
			array('id_aeronef_situation', 'required'),
			array('id_aeronef_situation', 'numerical', 'integerOnly'=>true),
			array('prix_heure_cellule, max_cellule, prix_heure_moteur, max_moteur, prix_heure_remorque, max_remorque', 'length', 'max'=>10),
			array('pourcent_paye_cellule, pourcent_paye_moteur, pourcent_paye_remorque', 'length', 'max'=>5),
			array('benef_retrocede', 'safe'),
			array('prix_heure_cellule, max_cellule, prix_heure_moteur, max_moteur, prix_heure_remorque, max_remorque, pourcent_paye_cellule, pourcent_paye_moteur, pourcent_paye_remorque, benef_retrocede', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_aeronef_situation, prix_heure_cellule, max_cellule, prix_heure_moteur, max_moteur, prix_heure_remorque, max_remorque, pourcent_paye_cellule, pourcent_paye_moteur, pourcent_paye_remorque, benef_retrocede', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idAeronefSituation' => array(self::BELONGS_TO, 'AeronefSituation', 'id_aeronef_situation'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_aeronef_situation' => null,
			'prix_heure_cellule' => Yii::t('app', 'Prix Heure Cellule'),
			'max_cellule' => Yii::t('app', 'Max Cellule'),
			'prix_heure_moteur' => Yii::t('app', 'Prix Heure Moteur'),
			'max_moteur' => Yii::t('app', 'Max Moteur'),
			'prix_heure_remorque' => Yii::t('app', 'Prix Heure Remorque'),
			'max_remorque' => Yii::t('app', 'Max Remorque'),
			'pourcent_paye_cellule' => Yii::t('app', 'Pourcent Paye Cellule'),
			'pourcent_paye_moteur' => Yii::t('app', 'Pourcent Paye Moteur'),
			'pourcent_paye_remorque' => Yii::t('app', 'Pourcent Paye Remorque'),
			'benef_retrocede' => Yii::t('app', 'Benef Retrocede'),
			'idAeronefSituation' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_aeronef_situation', $this->id_aeronef_situation);
		$criteria->compare('prix_heure_cellule', $this->prix_heure_cellule, true);
		$criteria->compare('max_cellule', $this->max_cellule, true);
		$criteria->compare('prix_heure_moteur', $this->prix_heure_moteur, true);
		$criteria->compare('max_moteur', $this->max_moteur, true);
		$criteria->compare('prix_heure_remorque', $this->prix_heure_remorque, true);
		$criteria->compare('max_remorque', $this->max_remorque, true);
		$criteria->compare('pourcent_paye_cellule', $this->pourcent_paye_cellule, true);
		$criteria->compare('pourcent_paye_moteur', $this->pourcent_paye_moteur, true);
		$criteria->compare('pourcent_paye_remorque', $this->pourcent_paye_remorque, true);
		$criteria->compare('benef_retrocede', $this->benef_retrocede);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
