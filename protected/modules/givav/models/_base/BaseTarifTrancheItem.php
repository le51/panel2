<?php

/**
 * This is the model base class for the table "tarif_tranche_item".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TarifTrancheItem".
 *
 * Columns in table "tarif_tranche_item" available as properties of the model,
 * followed by relations of table "tarif_tranche_item" available as properties of the model.
 *
 * @property integer $id_tarif_tranche
 * @property string $coefficient
 * @property string $plafond
 *
 * @property TarifTranche $idTarifTranche
 */
abstract class BaseTarifTrancheItem extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tarif_tranche_item';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TarifTrancheItem|TarifTrancheItems', $n);
	}

	public static function representingColumn() {
		return 'coefficient';
	}

	public function rules() {
		return array(
			array('id_tarif_tranche', 'required'),
			array('id_tarif_tranche', 'numerical', 'integerOnly'=>true),
			array('coefficient', 'length', 'max'=>5),
			array('coefficient, plafond', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_tarif_tranche, coefficient, plafond', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idTarifTranche' => array(self::BELONGS_TO, 'TarifTranche', 'id_tarif_tranche'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_tarif_tranche' => null,
			'coefficient' => Yii::t('app', 'Coefficient'),
			'plafond' => Yii::t('app', 'Plafond'),
			'idTarifTranche' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_tarif_tranche', $this->id_tarif_tranche);
		$criteria->compare('coefficient', $this->coefficient, true);
		$criteria->compare('plafond', $this->plafond, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
