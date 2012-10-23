<?php

Yii::import('application.modules.givav.models._base.BaseBanqueChequier');

class BanqueChequier extends BaseBanqueChequier
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}