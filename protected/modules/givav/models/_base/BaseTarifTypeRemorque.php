<?php

/**
 * This is the model base class for the table "tarif_type_remorque".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TarifTypeRemorque".
 *
 * Columns in table "tarif_type_remorque" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id_tarif_type_date
 * @property integer $id_remorque
 * @property string $prix
 * @property integer $id_tarif_tranche
 * @property integer $id_club
 * @property string $max
 * @property string $max_vol
 * @property string $pourcentage
 *
 */
abstract class BaseTarifTypeRemorque extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tarif_type_remorque';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TarifTypeRemorque|TarifTypeRemorques', $n);
	}

	public static function representingColumn() {
		return array(
			'id_tarif_type_date',
			'id_remorque',
		);
	}

	public function rules() {
		return array(
			array('id_tarif_type_date, id_remorque', 'required'),
			array('id_tarif_type_date, id_remorque, id_tarif_tranche, id_club', 'numerical', 'integerOnly'=>true),
			array('prix, max, max_vol', 'length', 'max'=>10),
			array('pourcentage', 'length', 'max'=>5),
			array('prix, id_tarif_tranche, id_club, max, max_vol, pourcentage', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_tarif_type_date, id_remorque, prix, id_tarif_tranche, id_club, max, max_vol, pourcentage', 'safe', 'on'=>'search'),
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
			'id_tarif_type_date' => null,
			'id_remorque' => null,
			'prix' => Yii::t('app', 'Prix'),
			'id_tarif_tranche' => null,
			'id_club' => null,
			'max' => Yii::t('app', 'Max'),
			'max_vol' => Yii::t('app', 'Max Vol'),
			'pourcentage' => Yii::t('app', 'Pourcentage'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_tarif_type_date', $this->id_tarif_type_date);
		$criteria->compare('id_remorque', $this->id_remorque);
		$criteria->compare('prix', $this->prix, true);
		$criteria->compare('id_tarif_tranche', $this->id_tarif_tranche);
		$criteria->compare('id_club', $this->id_club);
		$criteria->compare('max', $this->max, true);
		$criteria->compare('max_vol', $this->max_vol, true);
		$criteria->compare('pourcentage', $this->pourcentage, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
