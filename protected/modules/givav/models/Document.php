<?php

Yii::import('application.modules.givav.models._base.BaseDocument');

class Document extends BaseDocument
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}