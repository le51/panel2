<?php

/**
 * This is the model base class for the table "fonction".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Fonction".
 *
 * Columns in table "fonction" available as properties of the model,
 * followed by relations of table "fonction" available as properties of the model.
 *
 * @property integer $id_fonction
 * @property string $libelle
 * @property string $code
 * @property boolean $ffvv
 *
 * @property FonctionDate[] $fonctionDates
 */
abstract class BaseFonction extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'fonction';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Fonction|Fonctions', $n);
	}

	public static function representingColumn() {
		return 'libelle';
	}

	public function rules() {
		return array(
			array('libelle', 'required'),
			array('libelle', 'length', 'max'=>255),
			array('code', 'length', 'max'=>15),
			array('ffvv', 'safe'),
			array('code, ffvv', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_fonction, libelle, code, ffvv', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'fonctionDates' => array(self::HAS_MANY, 'FonctionDate', 'id_fonction'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_fonction' => Yii::t('app', 'Id Fonction'),
			'libelle' => Yii::t('app', 'Libelle'),
			'code' => Yii::t('app', 'Code'),
			'ffvv' => Yii::t('app', 'Ffvv'),
			'fonctionDates' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_fonction', $this->id_fonction);
		$criteria->compare('libelle', $this->libelle, true);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('ffvv', $this->ffvv);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
