<?php

/**
 * This is the model base class for the table "lien_chemise".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "LienChemise".
 *
 * Columns in table "lien_chemise" available as properties of the model,
 * followed by relations of table "lien_chemise" available as properties of the model.
 *
 * @property integer $id_lien_chemise
 * @property integer $id_classeur
 * @property integer $id_chemise
 *
 * @property Chemise $idChemise
 * @property Classeur $idClasseur
 */
abstract class BaseLienChemise extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'lien_chemise';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'LienChemise|LienChemises', $n);
	}

	public static function representingColumn() {
		return 'id_lien_chemise';
	}

	public function rules() {
		return array(
			array('id_classeur, id_chemise', 'required'),
			array('id_classeur, id_chemise', 'numerical', 'integerOnly'=>true),
			array('id_lien_chemise, id_classeur, id_chemise', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idChemise' => array(self::BELONGS_TO, 'Chemise', 'id_chemise'),
			'idClasseur' => array(self::BELONGS_TO, 'Classeur', 'id_classeur'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_lien_chemise' => Yii::t('app', 'Id Lien Chemise'),
			'id_classeur' => null,
			'id_chemise' => null,
			'idChemise' => null,
			'idClasseur' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_lien_chemise', $this->id_lien_chemise);
		$criteria->compare('id_classeur', $this->id_classeur);
		$criteria->compare('id_chemise', $this->id_chemise);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
