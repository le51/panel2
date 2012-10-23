<?php

/**
 * This is the model base class for the table "banque_chequier".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "BanqueChequier".
 *
 * Columns in table "banque_chequier" available as properties of the model,
 * followed by relations of table "banque_chequier" available as properties of the model.
 *
 * @property integer $id_banque_chequier
 * @property integer $id_banque
 * @property string $date_reception
 * @property integer $numero_debut
 * @property integer $nombre_cheques
 * @property boolean $est_termine
 *
 * @property Banque $idBanque
 * @property ChequeEmis[] $chequeEmises
 */
abstract class BaseBanqueChequier extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'banque_chequier';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'BanqueChequier|BanqueChequiers', $n);
	}

	public static function representingColumn() {
		return 'date_reception';
	}

	public function rules() {
		return array(
			array('id_banque, date_reception', 'required'),
			array('id_banque, numero_debut, nombre_cheques', 'numerical', 'integerOnly'=>true),
			array('est_termine', 'safe'),
			array('numero_debut, nombre_cheques, est_termine', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_banque_chequier, id_banque, date_reception, numero_debut, nombre_cheques, est_termine', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idBanque' => array(self::BELONGS_TO, 'Banque', 'id_banque'),
			'chequeEmises' => array(self::HAS_MANY, 'ChequeEmis', 'id_banque_chequier'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_banque_chequier' => Yii::t('app', 'Id Banque Chequier'),
			'id_banque' => null,
			'date_reception' => Yii::t('app', 'Date Reception'),
			'numero_debut' => Yii::t('app', 'Numero Debut'),
			'nombre_cheques' => Yii::t('app', 'Nombre Cheques'),
			'est_termine' => Yii::t('app', 'Est Termine'),
			'idBanque' => null,
			'chequeEmises' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_banque_chequier', $this->id_banque_chequier);
		$criteria->compare('id_banque', $this->id_banque);
		$criteria->compare('date_reception', $this->date_reception, true);
		$criteria->compare('numero_debut', $this->numero_debut);
		$criteria->compare('nombre_cheques', $this->nombre_cheques);
		$criteria->compare('est_termine', $this->est_termine);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}