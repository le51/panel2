<?php

/**
 * This is the model base class for the table "forfait_modele_cat_exclu".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ForfaitModeleCatExclu".
 *
 * Columns in table "forfait_modele_cat_exclu" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id_forfait_modele
 * @property integer $id_tarif_cat_aeronef
 *
 */
abstract class BaseForfaitModeleCatExclu extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'forfait_modele_cat_exclu';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ForfaitModeleCatExclu|ForfaitModeleCatExclus', $n);
	}

	public static function representingColumn() {
		return array(
			'id_forfait_modele',
			'id_tarif_cat_aeronef',
		);
	}

	public function rules() {
		return array(
			array('id_forfait_modele, id_tarif_cat_aeronef', 'required'),
			array('id_forfait_modele, id_tarif_cat_aeronef', 'numerical', 'integerOnly'=>true),
			array('id_forfait_modele, id_tarif_cat_aeronef', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_forfait_modele' => null,
			'id_tarif_cat_aeronef' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_forfait_modele', $this->id_forfait_modele);
		$criteria->compare('id_tarif_cat_aeronef', $this->id_tarif_cat_aeronef);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
