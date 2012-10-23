<?php

/**
 * This is the model base class for the table "remise_banque".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "RemiseBanque".
 *
 * Columns in table "remise_banque" available as properties of the model,
 * followed by relations of table "remise_banque" available as properties of the model.
 *
 * @property integer $id_remise
 * @property integer $id_banque
 * @property string $date_remise
 * @property boolean $est_encaissee
 * @property integer $id_piece
 *
 * @property Banque $idBanque
 * @property Piece $idPiece
 * @property ChequeRecu[] $chequeRecus
 */
abstract class BaseRemiseBanque extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'remise_banque';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'RemiseBanque|RemiseBanques', $n);
	}

	public static function representingColumn() {
		return 'date_remise';
	}

	public function rules() {
		return array(
			array('id_banque, date_remise, id_piece', 'required'),
			array('id_banque, id_piece', 'numerical', 'integerOnly'=>true),
			array('est_encaissee', 'safe'),
			array('est_encaissee', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_remise, id_banque, date_remise, est_encaissee, id_piece', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idBanque' => array(self::BELONGS_TO, 'Banque', 'id_banque'),
			'idPiece' => array(self::BELONGS_TO, 'Piece', 'id_piece'),
			'chequeRecus' => array(self::HAS_MANY, 'ChequeRecu', 'id_remise'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_remise' => Yii::t('app', 'Id Remise'),
			'id_banque' => null,
			'date_remise' => Yii::t('app', 'Date Remise'),
			'est_encaissee' => Yii::t('app', 'Est Encaissee'),
			'id_piece' => null,
			'idBanque' => null,
			'idPiece' => null,
			'chequeRecus' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_remise', $this->id_remise);
		$criteria->compare('id_banque', $this->id_banque);
		$criteria->compare('date_remise', $this->date_remise, true);
		$criteria->compare('est_encaissee', $this->est_encaissee);
		$criteria->compare('id_piece', $this->id_piece);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}