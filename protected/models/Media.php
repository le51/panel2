<?php

Yii::import('application.models._base.BaseMedia');

class Media extends BaseMedia
{
	public $file;
	public $status=array(
		'0'=>'unpublished',
		'1'=>'published',
		'2'=>'To be reviewed',
		'3'=>'deleted',
	);
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	
	/*protected function instantiate($attributes)
	{
		switch ($attributes['type'])
		{
			case 'image':
				$class='ImageMedia';
			break;
			case 'file':
				$class='FileMedia';
			break;
			default:
				$class=get_class($this);
		}
		$model = new $class(null);
		return $model;
	}*/
}
