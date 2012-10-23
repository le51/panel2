<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/*public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/

    private $_id;
 
    public function authenticate()
    {
        $username=substr(strtolower($this->username),1);
        $user=Annuaire::model()->find('id_annu=?',array($username));
        if($user===null || $user->sexe == 'A')
            $this->errorCode=self::ERROR_USERNAME_INVALID;
         //if($user->sexe == 'H')
           //$this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->id_annu;
            $this->username=$user->nom_prenom;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
	public function account($id_annu)
	{
		$sql="SELECT sum(credit) - sum(debit) FROM  compte, pilote, piece_ligne WHERE compte.id_compte = pilote.id_compte AND pilote.".$id_annu."= annuaire.".$id_annu." AND piece_ligne.id_compte = compte.id_compte;";
		$connection=Yii::app()->db2;
		$command=$connection->createCommand($sql);
		$solde=$command->queryScalar();
		return $solde;
	}
}
