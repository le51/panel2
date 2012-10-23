<?php

Yii::import('application.modules.givav.models._base.BaseFabriquant');

class Fabriquant extends BaseFabriquant
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}