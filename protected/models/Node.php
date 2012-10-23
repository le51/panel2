<?php

/**
 * This is the model class for table "node".
 *
 * The followings are the available columns in table 'node':
 * @property integer $id
 * @property string $created_at
 * @property string $modified_at
 * @property integer $created_by
 * @property integer $modified_by
 * @property string $reader_role
 * @property string $editor_role
 * @property string $manager_role
 * @property string $title_fr
 * @property string $intro_fr
 * @property string $body_fr
 * @property string $title_de
 * @property string $intro_de
 * @property string $body_de
 * @property string $title_en
 * @property string $intro_en
 * @property string $body_en
 * @property integer $status
 * @property integer $parent_id
 * @property string $type
 */
class Node extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Node the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'node';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, modified_at, created_by, modified_by, reader_role, editor_role, manager_role, title_fr, intro_fr, body_fr, title_de, intro_de, body_de, title_en, intro_en, body_en, status, parent_id, type', 'required'),
			array('created_by, modified_by, status, parent_id', 'numerical', 'integerOnly'=>true),
			array('created_at, modified_at, title_fr, type', 'length', 'max'=>40),
			array('reader_role, editor_role, manager_role, title_de, title_en', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, created_at, modified_at, created_by, modified_by, reader_role, editor_role, manager_role, title_fr, intro_fr, body_fr, title_de, intro_de, body_de, title_en, intro_en, body_en, status, parent_id, type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'created_at' => 'Created At',
			'modified_at' => 'Modified At',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
			'reader_role' => 'Reader Role',
			'editor_role' => 'Editor Role',
			'manager_role' => 'Manager Role',
			'title_fr' => 'Title Fr',
			'intro_fr' => 'Intro Fr',
			'body_fr' => 'Body Fr',
			'title_de' => 'Title De',
			'intro_de' => 'Intro De',
			'body_de' => 'Body De',
			'title_en' => 'Title En',
			'intro_en' => 'Intro En',
			'body_en' => 'Body En',
			'status' => 'Status',
			'parent_id' => 'Parent',
			'type' => 'Type',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('modified_at',$this->modified_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('reader_role',$this->reader_role,true);
		$criteria->compare('editor_role',$this->editor_role,true);
		$criteria->compare('manager_role',$this->manager_role,true);
		$criteria->compare('title_fr',$this->title_fr,true);
		$criteria->compare('intro_fr',$this->intro_fr,true);
		$criteria->compare('body_fr',$this->body_fr,true);
		$criteria->compare('title_de',$this->title_de,true);
		$criteria->compare('intro_de',$this->intro_de,true);
		$criteria->compare('body_de',$this->body_de,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('intro_en',$this->intro_en,true);
		$criteria->compare('body_en',$this->body_en,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}