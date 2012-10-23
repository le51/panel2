<?php

Yii::import('application.modules.givav.models._base.BaseCompte');

class Compte extends BaseCompte
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}