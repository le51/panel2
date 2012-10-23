<?php

class AnnuaireController extends GxController {

	/*public function filters(){
		return array(
			'rights',
		);
	}*/


	public $layout = 'column1';

	public function actionView($id) {
		$pilote = Pilote::model()->find('id_annu=:id_annu', array(':id_annu'=>$id));
		$vols = new CActiveDataProvider('PiloteVol',array(
			'criteria'=>array(
				'condition'=>'id_annu='.$id,
				'order'=> 'date_vol ASC',
			),
			'pagination'=>array('pageSize'=>20),
			
		));
		$this->render(
			'view', 
			array(
				'model' => $this->loadModel($id, 'Annuaire'),
				'pilote' => $pilote,
				'vols' => $vols,
		));
	}

	public function actionContact($id) {
		$this->renderPartial(
			'_contact', 
			array('model' => $this->loadModel($id, 'Annuaire'),
		));
	}
	public function actionPilote($id) {
		$model = Pilote::model()->find('id_annu=:id_annu', array(':id_annu'=>$id));
		$this->renderPartial(
			'_pilot', 
			array('model' => $model,
		));
	}
	public function actionVols($id) {
		$model = new CActiveDataProvider('PiloteVol',array(
			'criteria'=>array(
				'condition'=>'id_annu='.$id,
				'order'=> 'date_vol ASC',
			),
			'pagination'=>array('pageSize'=>20),
			
		));
		$this->renderPartial(
			'_vols', 
			array('model' => $model,
		),false,true);
	}
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider(Annuaire::model()->pilot());
                if(isset($_POST['limit'])) {
                        $limit = $_POST['limit'];
                } else {
                    $limit = 20;
                }

                if(isset($_POST['start'])){
                    $start = $_POST['start'];

                } else {
                    $start = 0;
                }
		$model = new Annuaire('search');
		$model->unsetAttributes();

                
		if (isset($_GET['Annuaire']))
			$model->attributes = $_GET['Annuaire'];

                if (isset($_GET['output']) && $_GET['output']=='json') {
                    $this->renderJson($model, $total);
                } else {
                    $model = new Annuaire('search');
                    $model->unsetAttributes();
		if (isset($_GET['Annuaire']))
			$model->attributes = $_GET['Annuaire'];
                    	$this->render('index', array(
                            	'model' => $model,
                          	'dataProvider' => $dataProvider,
                    ));
                }
	}

}
