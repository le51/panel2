<?php
class PlanningController extends Controller
{
public $layout='//layouts/column2';

	public function actionIndex()
	{
		if(isset($_GET['id_annu']))
		{
			$id = $_GET['id_annu'];
			$model = Yii::app()->givav->createCommand()
				->select('
					plan_jour.date_jour as start, 
					plan_group.nom_group as className,
					plan_group.nom_group as title
				')
				->from(array('plan_part', 'plan_group', 'plan_jour'))
				->where(array(
					'AND',
					'plan_part.id_plan_jour = plan_jour.id_plan_jour',
					'plan_group.id_plan_group = plan_jour.id_plan_group',
					'plan_part.id_annu='.$id
				))
				->queryAll();
			$this->render('index',array(
				'model'=>$model,
			));
		}
		elseif(isset($_GET['id_group']))
		{
			$id = $_GET['id_group'];
			$model = Yii::app()->givav->createCommand()
				->select('
					plan_jour.date_jour as start, 
					plan_group.nom_group as className,
					annuaire.nom_prenom as title
				')
				->from(array('plan_part', 'plan_group', 'plan_jour','annuaire'))
				->where(array(
					'AND',
					'plan_jour.id_plan_jour = plan_part.id_plan_jour',
					'plan_jour.id_plan_group='.$id,
					'plan_group.id_plan_group = plan_jour.id_plan_group',
					'plan_part.id_annu = annuaire.id_annu'
				))
				->queryAll();
			$this->render('index',array(
				'model'=>$model,
			));
		}
		else {
			$model = Yii::app()->givav->createCommand()
				->select('
					plan_jour.date_jour as start, 
					plan_group.nom_group as className,
					annuaire.nom_prenom as title
				')
				->from(array('plan_part', 'plan_group', 'plan_jour','annuaire'))
				->where(array(
					'AND',
					'plan_part.id_plan_jour = plan_jour.id_plan_jour',
					'plan_group.id_plan_group = plan_jour.id_plan_group',
					'plan_part.id_annu=annuaire.id_annu'
				))
				->queryAll();
			$this->render('index',array(
				'model'=>$model,
			));   
		}
	}
}
?>
