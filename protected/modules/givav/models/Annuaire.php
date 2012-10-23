<?php

Yii::import('application.modules.givav.models._base.BaseAnnuaire');

class Annuaire extends BaseAnnuaire
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
	public function validatePassword($password)
	{
		return $this->hashPassword($password)===$this->mot_de_passe;
	}
 
	public function hashPassword($password)
	{
		return substr(md5($password),0,20);
	}
	public function scopes()
	{
		return array(
			'pilot'=>array('condition'=>'sexe != \'A\''),
			'club'=>array('condition'=>'sexe = A'),		
		);
	}
    	public function defaultScope()
    	{
        	return array(
            		 'order'=>'nom_prenom ASC',
        	);
    	}
	public function account($id_annu)
	{
		$sql="SELECT sum(credit) - sum(debit) FROM  compte, pilote, piece_ligne WHERE compte.id_compte = pilote.id_compte AND pilote.id_annu=".$id_annu." AND piece_ligne.id_compte = compte.id_compte;";
		$connection=Yii::app()->givav;
		$command=$connection->createCommand($sql);
		$solde=$command->queryScalar();
		return $solde;
	}
}
