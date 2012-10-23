<?php

/**
 * This is the model base class for the table "modele".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Modele".
 *
 * Columns in table "modele" available as properties of the model,
 * followed by relations of table "modele" available as properties of the model.
 *
 * @property integer $id_modele
 * @property integer $id_fabriquant
 * @property string $libelle
 * @property integer $nb_places
 *
 * @property Type[] $types
 * @property Fabriquant $idFabriquant
 */
abstract class BaseModele extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'modele';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Modele|Modeles', $n);
	}

	public static function representingColumn() {
		return 'libelle';
	}

	public function rules() {
		return array(
			array('id_fabriquant, libelle', 'required'),
			array('id_fabriquant, nb_places', 'numerical', 'integerOnly'=>true),
			array('libelle', 'length', 'max'=>60),
			array('nb_places', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_modele, id_fabriquant, libelle, nb_places', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'types' => array(self::HAS_MANY, 'Type', 'id_modele'),
			'idFabriquant' => array(self::BELONGS_TO, 'Fabriquant', 'id_fabriquant'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_modele' => Yii::t('app', 'Id Modele'),
			'id_fabriquant' => null,
			'libelle' => Yii::t('app', 'Libelle'),
			'nb_places' => Yii::t('app', 'Nb Places'),
			'types' => null,
			'idFabriquant' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_modele', $this->id_modele);
		$criteria->compare('id_fabriquant', $this->id_fabriquant);
		$criteria->compare('libelle', $this->libelle, true);
		$criteria->compare('nb_places', $this->nb_places);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
