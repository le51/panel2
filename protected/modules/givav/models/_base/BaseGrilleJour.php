<?php

/**
 * This is the model base class for the table "grille_jour".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "GrilleJour".
 *
 * Columns in table "grille_jour" available as properties of the model,
 * followed by relations of table "grille_jour" available as properties of the model.
 *
 * @property integer $id_grille
 * @property string $date_jour
 * @property string $decollage
 * @property string $atterrissage
 * @property integer $remorqueur
 * @property integer $pilote_remorqueur
 * @property integer $treuil
 * @property integer $treuilleur
 * @property integer $ordre
 *
 * @property Grille $idGrille
 */
abstract class BaseGrilleJour extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'grille_jour';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'GrilleJour|GrilleJours', $n);
	}

	public static function representingColumn() {
		return 'date_jour';
	}

	public function rules() {
		return array(
			array('id_grille, date_jour, ordre', 'required'),
			array('id_grille, remorqueur, pilote_remorqueur, treuil, treuilleur, ordre', 'numerical', 'integerOnly'=>true),
			array('decollage, atterrissage', 'safe'),
			array('decollage, atterrissage, remorqueur, pilote_remorqueur, treuil, treuilleur', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_grille, date_jour, decollage, atterrissage, remorqueur, pilote_remorqueur, treuil, treuilleur, ordre', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idGrille' => array(self::BELONGS_TO, 'Grille', 'id_grille'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_grille' => null,
			'date_jour' => Yii::t('app', 'Date Jour'),
			'decollage' => Yii::t('app', 'Decollage'),
			'atterrissage' => Yii::t('app', 'Atterrissage'),
			'remorqueur' => Yii::t('app', 'Remorqueur'),
			'pilote_remorqueur' => Yii::t('app', 'Pilote Remorqueur'),
			'treuil' => Yii::t('app', 'Treuil'),
			'treuilleur' => Yii::t('app', 'Treuilleur'),
			'ordre' => Yii::t('app', 'Ordre'),
			'idGrille' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_grille', $this->id_grille);
		$criteria->compare('date_jour', $this->date_jour, true);
		$criteria->compare('decollage', $this->decollage, true);
		$criteria->compare('atterrissage', $this->atterrissage, true);
		$criteria->compare('remorqueur', $this->remorqueur);
		$criteria->compare('pilote_remorqueur', $this->pilote_remorqueur);
		$criteria->compare('treuil', $this->treuil);
		$criteria->compare('treuilleur', $this->treuilleur);
		$criteria->compare('ordre', $this->ordre);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}