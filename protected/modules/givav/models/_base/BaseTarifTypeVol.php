<?php

/**
 * This is the model base class for the table "tarif_type_vol".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TarifTypeVol".
 *
 * Columns in table "tarif_type_vol" available as properties of the model,
 * followed by relations of table "tarif_type_vol" available as properties of the model.
 *
 * @property integer $id_tarif_type_vol
 * @property string $nom_type_vol
 * @property boolean $solo
 * @property boolean $instruction
 * @property boolean $vi_club
 * @property boolean $vi_double_facture
 * @property boolean $vi_perso
 * @property boolean $passagers
 * @property boolean $actif
 * @property integer $id_compte_interne
 * @property boolean $decollage_facture
 * @property boolean $participation_journee_1
 * @property boolean $participation_journee_2
 *
 * @property CompteInterne $idCompteInterne
 * @property Concours[] $concours
 * @property Vol[] $vols
 * @property TarifTypeCond[] $tarifTypeConds
 */
abstract class BaseTarifTypeVol extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tarif_type_vol';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TarifTypeVol|TarifTypeVols', $n);
	}

	public static function representingColumn() {
		return 'nom_type_vol';
	}

	public function rules() {
		return array(
			array('nom_type_vol', 'required'),
			array('id_compte_interne', 'numerical', 'integerOnly'=>true),
			array('nom_type_vol', 'length', 'max'=>255),
			array('solo, instruction, vi_club, vi_double_facture, vi_perso, passagers, actif, decollage_facture, participation_journee_1, participation_journee_2', 'safe'),
			array('solo, instruction, vi_club, vi_double_facture, vi_perso, passagers, actif, id_compte_interne, decollage_facture, participation_journee_1, participation_journee_2', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_tarif_type_vol, nom_type_vol, solo, instruction, vi_club, vi_double_facture, vi_perso, passagers, actif, id_compte_interne, decollage_facture, participation_journee_1, participation_journee_2', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idCompteInterne' => array(self::BELONGS_TO, 'CompteInterne', 'id_compte_interne'),
			'concours' => array(self::HAS_MANY, 'Concours', 'id_tarif_type_vol'),
			'vols' => array(self::HAS_MANY, 'Vol', 'id_tarif_type_vol'),
			'tarifTypeConds' => array(self::HAS_MANY, 'TarifTypeCond', 'id_tarif_type_vol'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_tarif_type_vol' => Yii::t('app', 'Id Tarif Type Vol'),
			'nom_type_vol' => Yii::t('app', 'Nom Type Vol'),
			'solo' => Yii::t('app', 'Solo'),
			'instruction' => Yii::t('app', 'Instruction'),
			'vi_club' => Yii::t('app', 'Vi Club'),
			'vi_double_facture' => Yii::t('app', 'Vi Double Facture'),
			'vi_perso' => Yii::t('app', 'Vi Perso'),
			'passagers' => Yii::t('app', 'Passagers'),
			'actif' => Yii::t('app', 'Actif'),
			'id_compte_interne' => null,
			'decollage_facture' => Yii::t('app', 'Decollage Facture'),
			'participation_journee_1' => Yii::t('app', 'Participation Journee 1'),
			'participation_journee_2' => Yii::t('app', 'Participation Journee 2'),
			'idCompteInterne' => null,
			'concours' => null,
			'vols' => null,
			'tarifTypeConds' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_tarif_type_vol', $this->id_tarif_type_vol);
		$criteria->compare('nom_type_vol', $this->nom_type_vol, true);
		$criteria->compare('solo', $this->solo);
		$criteria->compare('instruction', $this->instruction);
		$criteria->compare('vi_club', $this->vi_club);
		$criteria->compare('vi_double_facture', $this->vi_double_facture);
		$criteria->compare('vi_perso', $this->vi_perso);
		$criteria->compare('passagers', $this->passagers);
		$criteria->compare('actif', $this->actif);
		$criteria->compare('id_compte_interne', $this->id_compte_interne);
		$criteria->compare('decollage_facture', $this->decollage_facture);
		$criteria->compare('participation_journee_1', $this->participation_journee_1);
		$criteria->compare('participation_journee_2', $this->participation_journee_2);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}