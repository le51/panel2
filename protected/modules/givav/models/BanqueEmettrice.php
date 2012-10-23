<?php

Yii::import('application.modules.givav.models._base.BaseBanqueEmettrice');

class BanqueEmettrice extends BaseBanqueEmettrice
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}