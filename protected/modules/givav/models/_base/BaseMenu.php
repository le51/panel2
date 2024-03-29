<?php

/**
 * This is the model base class for the table "menu".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Menu".
 *
 * Columns in table "menu" available as properties of the model,
 * followed by relations of table "menu" available as properties of the model.
 *
 * @property integer $id_menu
 * @property integer $niveau
 * @property string $nom
 * @property string $url
 * @property string $target
 *
 * @property MenuDroit[] $menuDroits
 */
abstract class BaseMenu extends GxActiveRecord {

	public function getDbConnection()
	{
		return Yii::app()->givav;
	}
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'menu';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Menu|Menus', $n);
	}

	public static function representingColumn() {
		return 'nom';
	}

	public function rules() {
		return array(
			array('niveau', 'numerical', 'integerOnly'=>true),
			array('nom, target', 'length', 'max'=>50),
			array('url', 'length', 'max'=>255),
			array('niveau, nom, url, target', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_menu, niveau, nom, url, target', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'menuDroits' => array(self::HAS_MANY, 'MenuDroit', 'id_menu'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_menu' => Yii::t('app', 'Id Menu'),
			'niveau' => Yii::t('app', 'Niveau'),
			'nom' => Yii::t('app', 'Nom'),
			'url' => Yii::t('app', 'Url'),
			'target' => Yii::t('app', 'Target'),
			'menuDroits' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_menu', $this->id_menu);
		$criteria->compare('niveau', $this->niveau);
		$criteria->compare('nom', $this->nom, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('target', $this->target, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
