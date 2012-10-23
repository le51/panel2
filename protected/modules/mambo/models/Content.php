<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property string $id
 * @property string $title
 * @property string $title_alias
 * @property string $introtext
 * @property string $fulltext
 * @property integer $state
 * @property string $sectionid
 * @property string $mask
 * @property string $catid
 * @property string $created
 * @property string $created_by
 * @property string $created_by_alias
 * @property string $modified
 * @property string $modified_by
 * @property string $checked_out
 * @property string $checked_out_time
 * @property string $publish_up
 * @property string $publish_down
 * @property string $images
 * @property string $urls
 * @property string $attribs
 * @property string $version
 * @property string $parentid
 * @property integer $ordering
 * @property string $metakey
 * @property string $metadesc
 * @property string $access
 * @property string $hits
 */
class Content extends CActiveRecord
{
	public function getDbConnection()
	{
		return Yii::app()->club;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Content the static model class
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
		return 'content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('introtext, title', 'required'),
			array('state, ordering', 'numerical', 'integerOnly'=>true),
			array('title, title_alias, created_by_alias', 'length', 'max'=>100),
			array('sectionid, mask, catid, created_by, modified_by, checked_out, version, parentid, access, hits', 'length', 'max'=>11),
			array('created, modified, checked_out_time, publish_up, publish_down', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array(' title, title_alias, introtext, fulltext, state, sectionid, mask, catid, created, created_by, created_by_alias, modified, modified_by, checked_out, checked_out_time, publish_up, publish_down, images, urls, attribs, version, parentid, ordering, metakey, metadesc, access, hits', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'title_alias' => 'Title Alias',
			'introtext' => 'Introtext',
			'fulltext' => 'Fulltext',
			'state' => 'State',
			'sectionid' => 'Sectionid',
			'mask' => 'Mask',
			'catid' => 'Catid',
			'created' => 'Created',
			'created_by' => 'Created By',
			'created_by_alias' => 'Created By Alias',
			'modified' => 'Modified',
			'modified_by' => 'Modified By',
			'checked_out' => 'Checked Out',
			'checked_out_time' => 'Checked Out Time',
			'publish_up' => 'Publish Up',
			'publish_down' => 'Publish Down',
			'images' => 'Images',
			'urls' => 'Urls',
			'attribs' => 'Attribs',
			'version' => 'Version',
			'parentid' => 'Parentid',
			'ordering' => 'Ordering',
			'metakey' => 'Metakey',
			'metadesc' => 'Metadesc',
			'access' => 'Access',
			'hits' => 'Hits',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_alias',$this->title_alias,true);
		$criteria->compare('introtext',$this->introtext,true);
		$criteria->compare('fulltext',$this->fulltext,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('sectionid',$this->sectionid,true);
		$criteria->compare('mask',$this->mask,true);
		$criteria->compare('catid',$this->catid,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_by_alias',$this->created_by_alias,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('checked_out',$this->checked_out,true);
		$criteria->compare('checked_out_time',$this->checked_out_time,true);
		$criteria->compare('publish_up',$this->publish_up,true);
		$criteria->compare('publish_down',$this->publish_down,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('urls',$this->urls,true);
		$criteria->compare('attribs',$this->attribs,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('parentid',$this->parentid,true);
		$criteria->compare('ordering',$this->ordering);
		$criteria->compare('metakey',$this->metakey,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('access',$this->access,true);
		$criteria->compare('hits',$this->hits,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function defaultScope()
	{
		return array(
			'condition'=>"catid='13'",
		);
    }
}
