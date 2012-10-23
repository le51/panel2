<?php

Yii::import('application.modules.givav.models._base.BaseChequeRecu');

class ChequeRecu extends BaseChequeRecu
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}