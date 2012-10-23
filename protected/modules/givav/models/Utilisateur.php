<?php

Yii::import('application.modules.givav.models._base.BaseUtilisateur');

class Utilisateur extends BaseUtilisateur
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}