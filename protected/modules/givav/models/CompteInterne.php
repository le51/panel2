<?php

Yii::import('application.modules.givav.models._base.BaseCompteInterne');

class CompteInterne extends BaseCompteInterne
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}