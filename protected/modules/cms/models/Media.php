<?php

Yii::import('application.modules.cms.models._base.BaseMedia');

class Media extends BaseMedia
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}