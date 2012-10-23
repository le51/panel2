<?php

/**
 * This is the model base class for the table "tarif_type_date".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TarifTypeDate".
 *
 * Columns in table "tarif_type_date" available as properties of the model,
 * followed by relations of table "tarif_type_date" available as properties of the model.
 *
 * @property integer $id_tarif_type_date
 * @property integer $id_tarif_type
 * @property string $date_application
 * @property integer $id_tarif_cat_aeronef
 * @property integer $id_aeronef
 * @property string $participation_journee
 * @property string $max_participation_journee
 * @property integer $id_club
 * @property string $pourcentage_club
 *
 * @property Aeronef $idAeronef
 * @property Club $idClub
 * @property TarifCatAeronef $idTarifCatAeronef
 * @property TarifType $idTarifType
 * @property Remorque[] $remorques
 * @property TarifTypeTreuillee $tarifTypeTreuillee
 * @property TarifTypeCond[] $tarifTypeConds
 */
abstract class BaseTarifTypeDate extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tarif_type_date';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TarifTypeDate|TarifTypeDates', $n);
	}

	public static function representingColumn() {
		return 'date_application';
	}

	public function rules() {
		return array(
			array('id_tarif_type, date_application', 'required'),
			array('id_tarif_type, id_tarif_cat_aeronef, id_aeronef, id_club', 'numerical', 'integerOnly'=>true),
			array('participation_journee, max_participation_journee', 'length', 'max'=>10),
			array('pourcentage_club', 'length', 'max'=>5),
			array('id_tarif_cat_aeronef, id_aeronef, participation_journee, max_participation_journee, id_club, pourcentage_club', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_tarif_type_date, id_tarif_type, date_application, id_tarif_cat_aeronef, id_aeronef, participation_journee, max_participation_journee, id_club, pourcentage_club', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idAeronef' => array(self::BELONGS_TO, 'Aeronef', 'id_aeronef'),
			'idClub' => array(self::BELONGS_TO, 'Club', 'id_club'),
			'idTarifCatAeronef' => array(self::BELONGS_TO, 'TarifCatAeronef', 'id_tarif_cat_aeronef'),
			'idTarifType' => array(self::BELONGS_TO, 'TarifType', 'id_tarif_type'),
			'remorques' => array(self::MANY_MANY, 'Remorque', 'tarif_type_remorque(id_tarif_type_date, id_remorque)'),
			'tarifTypeTreuillee' => array(self::HAS_ONE, 'TarifTypeTreuillee', 'id_tarif_type_date'),
			'tarifTypeConds' => array(self::HAS_MANY, 'TarifTypeCond', 'id_tarif_type_date'),
		);
	}

	public function pivotModels() {
		return array(
			'remorques' => 'TarifTypeRemorque',
		);
	}

	public function attributeLabels() {
		return array(
			'id_tarif_type_date' => Yii::t('app', 'Id Tarif Type Date'),
			'id_tarif_type' => null,
			'date_application' => Yii::t('app', 'Date Application'),
			'id_tarif_cat_aeronef' => null,
			'id_aeronef' => null,
			'participation_journee' => Yii::t('app', 'Participation Journee'),
			'max_participation_journee' => Yii::t('app', 'Max Participation Journee'),
			'id_club' => null,
			'pourcentage_club' => Yii::t('app', 'Pourcentage Club'),
			'idAeronef' => null,
			'idClub' => null,
			'idTarifCatAeronef' => null,
			'idTarifType' => null,
			'remorques' => null,
			'tarifTypeTreuillee' => null,
			'tarifTypeConds' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_tarif_type_date', $this->id_tarif_type_date);
		$criteria->compare('id_tarif_type', $this->id_tarif_type);
		$criteria->compare('date_application', $this->date_application, true);
		$criteria->compare('id_tarif_cat_aeronef', $this->id_tarif_cat_aeronef);
		$criteria->compare('id_aeronef', $this->id_aeronef);
		$criteria->compare('participation_journee', $this->participation_journee, true);
		$criteria->compare('max_participation_journee', $this->max_participation_journee, true);
		$criteria->compare('id_club', $this->id_club);
		$criteria->compare('pourcentage_club', $this->pourcentage_club, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}