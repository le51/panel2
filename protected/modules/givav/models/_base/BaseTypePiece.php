<?php

/**
 * This is the model base class for the table "type_piece".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TypePiece".
 *
 * Columns in table "type_piece" available as properties of the model,
 * followed by relations of table "type_piece" available as properties of the model.
 *
 * @property integer $id_type_piece
 * @property string $categorie
 * @property string $code
 * @property string $libelle
 * @property string $aide
 * @property boolean $numerotation_auto
 * @property integer $id_journal
 * @property boolean $avec_echeance
 * @property boolean $avec_valeur
 * @property boolean $avec_nom
 * @property boolean $est_cheque_recu
 * @property boolean $est_cheque_emis
 * @property boolean $est_cb_recu
 * @property string $prefix
 * @property string $chapitre_budget
 * @property boolean $est_budget_plus
 * @property boolean $actif
 * @property string $frais_cb
 *
 * @property Piece[] $pieces
 * @property EvenementModele[] $evenementModeles
 * @property Journal $idJournal
 * @property TypePieceEcr[] $typePieceEcrs
 */
abstract class BaseTypePiece extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'type_piece';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'TypePiece|TypePieces', $n);
	}

	public static function representingColumn() {
		return 'categorie';
	}

	public function rules() {
		return array(
			array('code, libelle, id_journal', 'required'),
			array('id_journal', 'numerical', 'integerOnly'=>true),
			array('categorie, prefix', 'length', 'max'=>1),
			array('code, frais_cb', 'length', 'max'=>5),
			array('libelle', 'length', 'max'=>120),
			array('chapitre_budget', 'length', 'max'=>8),
			array('aide, numerotation_auto, avec_echeance, avec_valeur, avec_nom, est_cheque_recu, est_cheque_emis, est_cb_recu, est_budget_plus, actif', 'safe'),
			array('categorie, aide, numerotation_auto, avec_echeance, avec_valeur, avec_nom, est_cheque_recu, est_cheque_emis, est_cb_recu, prefix, chapitre_budget, est_budget_plus, actif, frais_cb', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_type_piece, categorie, code, libelle, aide, numerotation_auto, id_journal, avec_echeance, avec_valeur, avec_nom, est_cheque_recu, est_cheque_emis, est_cb_recu, prefix, chapitre_budget, est_budget_plus, actif, frais_cb', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'pieces' => array(self::HAS_MANY, 'Piece', 'id_type_piece'),
			'evenementModeles' => array(self::HAS_MANY, 'EvenementModele', 'id_type_piece'),
			'idJournal' => array(self::BELONGS_TO, 'Journal', 'id_journal'),
			'typePieceEcrs' => array(self::HAS_MANY, 'TypePieceEcr', 'id_type_piece'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_type_piece' => Yii::t('app', 'Id Type Piece'),
			'categorie' => Yii::t('app', 'Categorie'),
			'code' => Yii::t('app', 'Code'),
			'libelle' => Yii::t('app', 'Libelle'),
			'aide' => Yii::t('app', 'Aide'),
			'numerotation_auto' => Yii::t('app', 'Numerotation Auto'),
			'id_journal' => null,
			'avec_echeance' => Yii::t('app', 'Avec Echeance'),
			'avec_valeur' => Yii::t('app', 'Avec Valeur'),
			'avec_nom' => Yii::t('app', 'Avec Nom'),
			'est_cheque_recu' => Yii::t('app', 'Est Cheque Recu'),
			'est_cheque_emis' => Yii::t('app', 'Est Cheque Emis'),
			'est_cb_recu' => Yii::t('app', 'Est Cb Recu'),
			'prefix' => Yii::t('app', 'Prefix'),
			'chapitre_budget' => Yii::t('app', 'Chapitre Budget'),
			'est_budget_plus' => Yii::t('app', 'Est Budget Plus'),
			'actif' => Yii::t('app', 'Actif'),
			'frais_cb' => Yii::t('app', 'Frais Cb'),
			'pieces' => null,
			'evenementModeles' => null,
			'idJournal' => null,
			'typePieceEcrs' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_type_piece', $this->id_type_piece);
		$criteria->compare('categorie', $this->categorie, true);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('libelle', $this->libelle, true);
		$criteria->compare('aide', $this->aide, true);
		$criteria->compare('numerotation_auto', $this->numerotation_auto);
		$criteria->compare('id_journal', $this->id_journal);
		$criteria->compare('avec_echeance', $this->avec_echeance);
		$criteria->compare('avec_valeur', $this->avec_valeur);
		$criteria->compare('avec_nom', $this->avec_nom);
		$criteria->compare('est_cheque_recu', $this->est_cheque_recu);
		$criteria->compare('est_cheque_emis', $this->est_cheque_emis);
		$criteria->compare('est_cb_recu', $this->est_cb_recu);
		$criteria->compare('prefix', $this->prefix, true);
		$criteria->compare('chapitre_budget', $this->chapitre_budget, true);
		$criteria->compare('est_budget_plus', $this->est_budget_plus);
		$criteria->compare('actif', $this->actif);
		$criteria->compare('frais_cb', $this->frais_cb, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
