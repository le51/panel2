<?php

class SoldeController extends Controller
{


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{

		$this->render('index');
	}

	public function actionActif()
	{
		$count=Yii::app()->givav->createCommand('SELECT COUNT(*) FROM pilote WHERE pilote.pilote_actif = TRUE')->queryScalar();
		$sql="SELECT annuaire.id_annu AS id, annuaire.nom_prenom AS pilote, sum(credit) - sum(debit) AS Solde FROM annuaire, compte, pilote, piece_ligne WHERE compte.id_compte = pilote.id_compte AND pilote.id_annu = annuaire.id_annu AND piece_ligne.id_compte = compte.id_compte AND pilote.pilote_actif = TRUE GROUP BY annuaire.id_annu, annuaire.nom_prenom ORDER BY Solde ASC";
	$solde=new CSqlDataProvider($sql, array(
		'totalItemCount'=>$count,
		'sort'=>array(
			'attributes'=>array(
				'id',  'pilote', 'solde',
			),
		),
		'pagination'=>array(
		'pageSize'=>20,
	),
	));		
		$this->renderPartial('_solde',array('solde'=>$solde),false,true);
	}

	public function actionActif3()
	{
		$count=Yii::app()->givav->createCommand('SELECT COUNT(*) FROM pilote WHERE pilote.pilote_actif_3 = TRUE')->queryScalar();
		$sql="SELECT annuaire.id_annu AS id, annuaire.nom_prenom AS pilote, sum(credit) - sum(debit) AS Solde FROM annuaire, compte, pilote, piece_ligne WHERE compte.id_compte = pilote.id_compte AND pilote.id_annu = annuaire.id_annu AND piece_ligne.id_compte = compte.id_compte AND pilote.pilote_actif_3 = TRUE GROUP BY annuaire.id_annu, annuaire.nom_prenom ORDER BY Solde ASC";
	$solde=new CSqlDataProvider($sql, array(
		'totalItemCount'=>$count,
		'sort'=>array(
			'attributes'=>array(
				'id',  'pilote', 'solde',
			),
		),
		'pagination'=>array(
		'pageSize'=>20,
	),
	));	
		$this->renderPartial('_solde3',array('solde'=>$solde),false,true);
	}

	public function actionTous()
	{
		$count=Yii::app()->givav->createCommand('SELECT COUNT(*) FROM pilote')->queryScalar();
		$sql="SELECT annuaire.id_annu AS id, annuaire.nom_prenom AS pilote, sum(credit) - sum(debit) AS Solde FROM annuaire, compte, pilote, piece_ligne WHERE compte.id_compte = pilote.id_compte AND pilote.id_annu = annuaire.id_annu AND piece_ligne.id_compte = compte.id_compte GROUP BY annuaire.id_annu, annuaire.nom_prenom ORDER BY Solde ASC";
	$solde=new CSqlDataProvider($sql, array(
		'totalItemCount'=>$count,
		'sort'=>array(
			'attributes'=>array(
				'id',  'pilote', 'solde',
			),
		),
		'pagination'=>array(
		'pageSize'=>20,
	),
	));
		$this->renderPartial('_soldetous',array('solde'=>$solde),false,true);
	}
}
