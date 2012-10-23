<?php

/**
 * This is the model base class for the table "hebergement".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Hebergement".
 *
 * Columns in table "hebergement" available as properties of the model,
 * followed by relations of table "hebergement" available as properties of the model.
 *
 * @property integer $id_hebergement
 * @property integer $id_annu
 * @property string $contact
 * @property boolean $actif
 *
 * @property Annuaire $idAnnu
 * @property Stage[] $stages
 * @property DemandeStage[] $demandeStages
 */
abstract class BaseHebergement extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'hebergement';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Hebergement|Hebergements', $n);
	}

	public static function representingColumn() {
		return 'contact';
	}

	public function rules() {
		return array(
			array('id_annu', 'required'),
			array('id_annu', 'numerical', 'integerOnly'=>true),
			array('contact', 'length', 'max'=>60),
			array('actif', 'safe'),
			array('contact, actif', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_hebergement, id_annu, contact, actif', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idAnnu' => array(self::BELONGS_TO, 'Annuaire', 'id_annu'),
			'stages' => array(self::HAS_MANY, 'Stage', 'id_hebergement'),
			'demandeStages' => array(self::HAS_MANY, 'DemandeStage', 'id_hebergement'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_hebergement' => Yii::t('app', 'Id Hebergement'),
			'id_annu' => null,
			'contact' => Yii::t('app', 'Contact'),
			'actif' => Yii::t('app', 'Actif'),
			'idAnnu' => null,
			'stages' => null,
			'demandeStages' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_hebergement', $this->id_hebergement);
		$criteria->compare('id_annu', $this->id_annu);
		$criteria->compare('contact', $this->contact, true);
		$criteria->compare('actif', $this->actif);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
