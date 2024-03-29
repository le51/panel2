<?php

/**
 * This is the model base class for the table "tarif_temps".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TarifTemps".
 *
 * Columns in table "tarif_temps" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id_annu
 * @property string $partie
 * @property string $temps_facture
 *
 */
abstract class BaseTarifTemps extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tarif_temps';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TarifTemps|TarifTemps', $n);
	}

	public static function representingColumn() {
		return 'partie';
	}

	public function rules() {
		return array(
			array('id_annu', 'required'),
			array('id_annu', 'numerical', 'integerOnly'=>true),
			array('partie', 'length', 'max'=>1),
			array('temps_facture', 'safe'),
			array('partie, temps_facture', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_annu, partie, temps_facture', 'safe', 'on'=>'search'),
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
			'id_annu' => Yii::t('app', 'Id Annu'),
			'partie' => Yii::t('app', 'Partie'),
			'temps_facture' => Yii::t('app', 'Temps Facture'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_annu', $this->id_annu);
		$criteria->compare('partie', $this->partie, true);
		$criteria->compare('temps_facture', $this->temps_facture, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
