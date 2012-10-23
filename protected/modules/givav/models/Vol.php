<?php

Yii::import('application.modules.givav.models._base.BaseVol');

class Vol extends BaseVol
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}