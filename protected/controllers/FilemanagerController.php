<?php

class FilemanagerController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @return array action filters
	 */
	/*public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			'rights',
		);
	}*/

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	/*public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','fileUploaderConnector','imageUpload','listImages','gallery','connector','mediaconnector','createImageMedia','explorer','browserFileList'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}*/
	
	public function actions()
	{
		return array(
			'fileUploaderConnector' => "ext.ezzeelfinder.ElFinderConnectorAction",
			'connector' => array(
						    'class' => 'ext.elFinder.ElFinderConnectorAction',
						    'settings' => array(
						        'root' => Yii::getPathOfAlias('webroot') . '/uploads/images/',
						        'URL' => Yii::app()->baseUrl . '/uploads/images/',
						        'rootAlias' => 'Image',
						        'mimeDetect' => 'none'
						    )
						),
						'mediaconnector' => array(
						    'class' => 'ext.elFinder.ElFinderConnectorAction',
						    'settings' => array(
						        'root' => Yii::getPathOfAlias('webroot') . '/uploads/files/',
						        'URL' => Yii::app()->baseUrl . '/uploads/files',
						        'rootAlias' => 'Media',
						        'mimeDetect' => 'none'
						    )
						),
						'simpleUpload'=>array(
						    'class'=>'xupload.actions.XUploadAction',
						    'path' =>Yii::app() -> getBasePath() . "/../xuploads/simple",
						    'publicPath' => Yii::app() -> getBaseUrl() . "/xuploads/simple",
						),
						'additionalDataUpload'=>array(
						    'class'=>'xupload.actions.XUploadAction',
						    'path' =>Yii::app() -> getBasePath() . "/../xuploads/additional",
						    'publicPath' => Yii::app() -> getBaseUrl() . "/xuploads/additional",
						),
					);
	}
	
	public function actionIndex()
	{
		$files=CFileHelper::findFiles('uploads/tmp');
		//return $files;
		$this->render('index',array('files'=>$files));
	}
	
	public function actionSimpleXUpload() {
	    Yii::import("xupload.models.XUploadForm");
	    $model = new XUploadForm;
	    $this -> render('simpleUpload', array('model' => $model, ));
	}

public function actionAdditionalDataXUpload() {
	    Yii::import("xupload.models.XUploadForm");
	    $model = new XUploadForm;
	    $this -> render('additionalDataUpload', array('model' => $model, ));
	}

public function actionUploadAdditional(){
        header( 'Vary: Accept' );
        if( isset( $_SERVER['HTTP_ACCEPT'] ) && (strpos( $_SERVER['HTTP_ACCEPT'], 'application/json' ) !== false) ) {
            header( 'Content-type: application/json' );
        } else {
            header( 'Content-type: text/plain' );
        }
 
        if( isset( $_GET["_method"] ) ) {
            if( $_GET["_method"] == "delete" ) {
                $success = is_file( $_GET["file"] ) && $_GET["file"][0] !== '.' && unlink( $_GET["file"] );
                echo json_encode( $success );
            }
        } else {
            $this->init( );
            $model = new Media;//Here we instantiate our model
            
            $model->file = CUploadedFile::getInstance( $model, 'file' );
            if( $model->file !== null ) {
                $model->mime_type = $model->file->getType( );
                $model->size = $model->file->getSize( );
                $model->name = $model->file->getName( );
                $model->title_fr = Yii::app()->request->getPost('title_fr', '');
                $model->description_fr  = Yii::app()->request->getPost('description_fr', '');
                $model->title_fr = Yii::app()->request->getPost('title_de', '');
                $model->description_fr  = Yii::app()->request->getPost('description_de', '');
                $model->title_fr = Yii::app()->request->getPost('title_en', '');
                $model->description_fr  = Yii::app()->request->getPost('description_en', '');
                if( $model->validate( ) ) {
                    $path = Yii::app() -> getBasePath() . "/../media/images/".date('Y')."/".date('m')."/".date('d')."/";
                    $publicPath = Yii::app()->getBaseUrl()."/media/images/".date('Y')."/".date('m')."/".date('d')."/";
                    if( !is_dir( $path ) ) {
                        mkdir( $path, 0777, true );
                        chmod ( $path , 0777 );
                    }
                    $model->file->saveAs( $path.$model->name );
                    chmod( $path.$model->name, 0777 );
					$model->save();
                    //Now we return our json
                    echo json_encode( 
                    	array( 
                    		array(
		                        "name" => $model->name,
		                        "type" => $model->mime_type,
		                        "size" => $model->size,
		                        //Add the title 
		                        "title" => $model->title_fr,
		                        //And the description
		                        "description" => $model->description_fr,
		                        "url" => $publicPath.$model->name,
		                        "thumbnail_url" => $publicPath.$model->name,
		                        "delete_url" => $this->createUrl( "upload", array(
		                            "_method" => "delete",
		                            "file" => $path.$model->name
		                        ) ),
		                        "delete_type" => "POST"
                        	)
                         )
                    );
                } else {
                    echo json_encode( array( array( "error" => $model->getErrors( 'file' ), ) ) );
                    Yii::log( "XUploadAction: ".CVarDumper::dumpAsString( $model->getErrors( ) ), CLogger::LEVEL_ERROR, "xupload.actions.XUploadAction" );
                }
            } else {
                throw new CHttpException( 500, "Could not upload file" );
            }
        }
    }

	public function actionGallery()
	{
		$files=CFileHelper::findFiles('uploads/tmp');
		$imagesItems=array();
		foreach($files as $cle=>$valeur)
		{
			$imagesItems[]=array('image'=>$valeur, 'label'=>'First Thumbnail label', 'caption'=>'Cras');
		}
		//return $files;
		$this->render('gallery',array('files'=>$files,'imagesItems'=>$imagesItems));
	}
	
	public function actionImageUpload()
	{
		// files storage folder
		$dir = 'uploads/';
		 
		$_FILES['file']['type'] = strtolower($_FILES['file']['type']);
		 
		if ($_FILES['file']['type'] == 'image/png' 
		|| $_FILES['file']['type'] == 'image/jpg' 
		|| $_FILES['file']['type'] == 'image/gif' 
		|| $_FILES['file']['type'] == 'image/jpeg'
		|| $_FILES['file']['type'] == 'image/pjpeg')
		{	
			// setting file's mysterious name
			$file = $dir.md5(date('YmdHis')).'.jpg';
		 
			// copying
			copy($_FILES['file']['tmp_name'], $file);
		 
			// displaying file
			$array = array(
				'filelink' => '/'.$file
			);
	
			//echo stripslashes(json_encode($array));   
		}
	} 
	
	public function actionExplorer()
	{
	$dataTree=array(
		array(
			'text'=>'Autre  Grampa', //must using 'text' key to show the text
			'text'=>'Grampa', //must using 'text' key to show the text
			'children'=>array(//using 'children' key to indicate there are children
				array(
					'text'=>'Father',
					'children'=>array(
						array('text'=>'me'),
						array('text'=>'big sis'),
						array('text'=>'little brother'),
					)
				),
				array(
					'text'=>'Uncle',
					'children'=>array(
						array('text'=>'Ben'),
						array('text'=>'Sally'),
					)
				),
				array(
					'text'=>'Aunt',
				)
			)
		)
	);
	$this->render('explorer', array('dataTree'=>$dataTree));
	}
	
	
	
	public function actionGetTree()
	{
		if (!Yii::app()->request->isAjaxRequest) 
		{
			exit();
		}
		if (isset($_GET['root']) && $_GET['root'] !== 'source') 
		{
			$dir = $_GET['root'];
		}
		else
		{
			$dir ='/';
		}
		$root='/var/www/panel/uploads/';
		if( file_exists($root . $dir) ) 
		{
			$files = scandir($root . $dir);
			natcasesort($files);
			$result=array();
			if( count($files) > 2 ) 
			{ 
				foreach( $files as $cle=>$file ) 
				{
					if( file_exists($root . $dir . $file) && $file != '.' && $file != '..' && $file != '.thumbs' && $file != '.quarantine' && is_dir($root . $dir .'/'. $file) ) 
					{
						$result[]=array('text'=>htmlentities($file),'hasChildren'=>true, 'id'=>$file);
					}
				}
			}
		}
		echo CTreeView::saveDataAsJson($result);
		
	}

	public function actionBrowserFileList()
	{
		$root='/var/www/panel/uploads/';
		$_POST['dir'] = urldecode($_POST['dir']);
		if( file_exists($root . $_POST['dir']) ) {
			$files = scandir($root . $_POST['dir']);
			natcasesort($files);
			if( count($files) > 2 ) { 
				echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
				// All dirs
				foreach( $files as $file ) {
					if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
						echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
					}
				}
				// All files
				foreach( $files as $file ) {
					if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && !is_dir($root . $_POST['dir'] . $file) ) {
						$ext = preg_replace('/^.*\./', '', $file);
						echo "<li class=\"file ext_$ext\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a></li>";
					}
				}
				echo "</ul>";	
			}
		}
	}

	public function actionListImages()
	{
		$files=CFileHelper::findFiles('uploads/images');
		$imagesItems=array();
		foreach($files as $cle=>$valeur)
		{
			$imagesItems[]=array('thumb'=>'../'.$valeur,'image'=>'../'.$valeur,'folder'=>'test');
		}
		echo json_encode($imagesItems);
		//return $imagesItems;
	}
	
	
	public function actionCreateImageMedia()
	{
		if($files=CFileHelper::findFiles('uploads/tmp'))
		{
		//$dir = 
		foreach($files as $cle=>$valeur) 
			{
				$settings=array(
					'span1'=>'70',
					'span2'=>'170',
					'span3'=>'270',
					'span4'=>'370',
					'span6'=>'570',
					'span9'=>'870',
					'span12'=>'1170',
				);
				foreach($settings as $span=>$size)
				{
				$img = Yii::app()->imagemod->load($valeur);
				$formatted_value = sprintf("%03d", $cle);
				$img->file_new_name_body = $formatted_value;
				$img->image_resize          = true;
				$img->image_ratio_y         = true;
				$img->image_x               = $size;
					$img->process(Yii::getPathOfAlias('webroot') . '/uploads/images/gallery/'.date('Y').'/'.date('m').'/'.date('d').'/'.$span.'/');
					if ($img->processed) {
						echo 'image '.$valeur. '  -  '.$span.'<br/>';
						//$img->clean();
					} else {
						echo 'error : ' . $img->error;
					}
				}
			} 
		}
		else echo 'ERROR';
	}
	
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	public function actionForm( ) {
		$model = new Media;
		Yii::import( "xupload.models.XUploadForm" );
		$photos = new XUploadForm;
		if( isset( $_POST['Media'] ) ) {
		    //Assign our safe attributes
		    $model->attributes = $_POST['Media'];
		    //Start a transaction in case something goes wrong
		    $transaction = Yii::app( )->db->beginTransaction( );
		    try {
		        //Save the model to the database
		        if($model->save()){
		            $transaction->commit();
		        }
		    } catch(Exception $e) {
		        $transaction->rollback( );
		        Yii::app( )->handleException( $e );
		    }
    }
		$this->render( 'form', array(
		    'model' => $model,
		    'photos' => $photos,
		) );
	}
	
	public function actionUpload1( ) {
    Yii::import( "xupload.models.XUploadForm" );
    //Here we define the paths where the files will be stored temporarily
    $path = realpath( Yii::app( )->getBasePath( )."/../tmp/" ."/");
    $publicPath = Yii::app( )->getBaseUrl( )."/tmp/";
 
    //This is for IE which doens't handle 'Content-type: application/json' correctly
    header( 'Vary: Accept' );
    if( isset( $_SERVER['HTTP_ACCEPT'] ) 
        && (strpos( $_SERVER['HTTP_ACCEPT'], 'application/json' ) !== false) ) {
        header( 'Content-type: application/json' );
    } else {
        header( 'Content-type: text/plain' );
    }
 
    //Here we check if we are deleting and uploaded file
    if( isset( $_GET["_method"] ) ) {
        if( $_GET["_method"] == "delete" ) {
            if( $_GET["file"][0] !== '.' ) {
                $file = $path.$_GET["file"];
                if( is_file( $file ) ) {
                    unlink( $file );
                }
            }
            echo json_encode( true );
        }
    } else {
        $model = new XUploadForm;
        $model->file = CUploadedFile::getInstance( $model, 'file' );
        //We check that the file was successfully uploaded
        if( $model->file !== null ) {
            //Grab some data
            $model->mime_type = $model->file->getType( );
            $model->size = $model->file->getSize( );
            $model->name = $model->file->getName( );
            //(optional) Generate a random name for our file
            $filename = md5( Yii::app( )->user->id.microtime( ).$model->name);
            $filename .= ".".$model->file->getExtensionName( );
            if( $model->validate( ) ) {
                //Move our file to our temporary dir
                $model->file->saveAs( $path.$filename );
                chmod( $path.$filename, 0777 );
                //here you can also generate the image versions you need 
                //using something like PHPThumb
 
 
                //Now we need to save this path to the user's session
                if( Yii::app( )->user->hasState( 'images' ) ) {
                    $userImages = Yii::app( )->user->getState( 'images' );
                } else {
                    $userImages = array();
                }
                 $userImages[] = array(
                    "path" => $path.$filename,
                    //the same file or a thumb version that you generated
                    "thumb" => $path.$filename,
                    "filename" => $filename,
                    'size' => $model->size,
                    'mime' => $model->mime_type,
                    'name' => $model->name,
                );
                Yii::app( )->user->setState( 'images', $userImages );
 
                //Now we need to tell our widget that the upload was succesfull
                //We do so, using the json structure defined in
                // https://github.com/blueimp/jQuery-File-Upload/wiki/Setup
                echo json_encode( array( array(
                        "name" => $model->name,
                        "type" => $model->mime_type,
                        "size" => $model->size,
                        "url" => $publicPath.$filename,
                        "thumbnail_url" => $publicPath."thumbs/$filename",
                        "delete_url" => $this->createUrl( "upload", array(
                            "_method" => "delete",
                            "file" => $filename
                        ) ),
                        "delete_type" => "POST"
                    ) ) );
            } else {
                //If the upload failed for some reason we log some data and let the widget know
                echo json_encode( array( 
                    array( "error" => $model->getErrors( 'file' ),
                ) ) );
                Yii::log( "XUploadAction: ".CVarDumper::dumpAsString( $model->getErrors( ) ),
                    CLogger::LEVEL_ERROR, "xupload.actions.XUploadAction" 
                );
            }
        } else {
            throw new CHttpException( 500, "Could not upload file" );
        }
    }
}
}
