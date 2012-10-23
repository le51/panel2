<?php

class AnnuaireController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Annuaire'),
		));
	}

	public function actionCreate() {
		$model = new Annuaire;

		$this->performAjaxValidation($model, 'annuaire-form');

		if (isset($_POST['Annuaire'])) {
			$model->setAttributes($_POST['Annuaire']);
			$relatedData = array(
				'aeronefSituations' => $_POST['Annuaire']['aeronefSituations'] === '' ? null : $_POST['Annuaire']['aeronefSituations'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_annu));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Annuaire');

		$this->performAjaxValidation($model, 'annuaire-form');

		if (isset($_POST['Annuaire'])) {
			$model->setAttributes($_POST['Annuaire']);
			$relatedData = array(
				'aeronefSituations' => $_POST['Annuaire']['aeronefSituations'] === '' ? null : $_POST['Annuaire']['aeronefSituations'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id_annu));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Annuaire')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Annuaire');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Annuaire('search');
		$model->unsetAttributes();

		if (isset($_GET['Annuaire']))
			$model->setAttributes($_GET['Annuaire']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}