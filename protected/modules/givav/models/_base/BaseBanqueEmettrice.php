<?php

/**
 * This is the model base class for the table "banque_emettrice".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "BanqueEmettrice".
 *
 * Columns in table "banque_emettrice" available as properties of the model,
 * followed by relations of table "banque_emettrice" available as properties of the model.
 *
 * @property integer $id_banque_emettrice
 * @property string $nom
 *
 * @property ChequeRecu[] $chequeRecus
 * @property Banque[] $banques
 */
abstract class BaseBanqueEmettrice extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'banque_emettrice';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'BanqueEmettrice|BanqueEmettrices', $n);
	}

	public static function representingColumn() {
		return 'nom';
	}

	public function rules() {
		return array(
			array('nom', 'required'),
			array('nom', 'length', 'max'=>120),
			array('id_banque_emettrice, nom', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'chequeRecus' => array(self::HAS_MANY, 'ChequeRecu', 'id_banque_emettrice'),
			'banques' => array(self::HAS_MANY, 'Banque', 'id_banque_emettrice'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_banque_emettrice' => Yii::t('app', 'Id Banque Emettrice'),
			'nom' => Yii::t('app', 'Nom'),
			'chequeRecus' => null,
			'banques' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_banque_emettrice', $this->id_banque_emettrice);
		$criteria->compare('nom', $this->nom, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
