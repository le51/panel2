<?php

class UpdateannuaireController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters(){
		return array(
			'rights',
		);
	}



	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		
		//$model=Annuaire::model()->find
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$model=$this->loadModel($id);
		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionSave()
	{
		$model = new Updateannuaire;


		if (isset($_POST['Annuaire'])) {
			$model->attributes = $_POST['Annuaire'];

			if ($model->save()) {
				if (Yii::app()->request->isAjaxRequest)
					Yii::app()->end();
				else
					$this->redirect('/annuaire');
			}
		}	
	}

	/*
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Annuaire::model()->find('id_annu=:id_annu', array(':id_annu'=>$id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='updateannuaire-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
