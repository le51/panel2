<?php

Yii::import('application.modules.givav.models._base.BaseBanque');

class Banque extends BaseBanque
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}