<?php

Yii::import('application.modules.givav.models._base.BaseJournal');

class Journal extends BaseJournal
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}