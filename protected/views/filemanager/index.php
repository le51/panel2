
<div class="span9">
<div id="file-uploader"></div>
<?php
 
$filesPath = realpath(Yii::app()->basePath . "/../uploads");
$filesUrl = Yii::app()->baseUrl . "/uploads";
 
$this->widget("ext.ezzeelfinder.ElFinderWidget", array(
    'selector' => "div#file-uploader",
    'clientOptions' => array(
        'lang' => "fr",
        'resizable' => false,
        //'wysiwyg' => "ckeditor"
    ),
    'connectorRoute' => "filemanager/fileUploaderConnector",
    'connectorOptions' => array(
    	'debug'=>true,
    	
        'roots' => array(
            array(
                'driver'  => 'LocalFileSystem',
                'path' => $filesPath.'/images/',
                'URL' => $filesUrl.'/images',
                'tmbPath'=>'../.tmb',
                //'accessControl' => "access",
                //'alias'=>'Images',
            ),
            array(
                'driver'  => 'LocalFileSystem',
                'path' => $filesPath.'/files/',
                'URL' => $filesUrl.'/files',
                'tmbPath'=>'../.tmb',
                //'accessControl' => "access"
                //'alias'=>'Images',
            ),
            /*array(
                'driver'  => 'LocalFileSystem',
                'path' => $filesPath.'/tmp/',
                'URL' => $filesUrl.'/tmp',
                'tmbPath'=>'../.tmb',
                //'alias'=>'TMP',
                
            ),*/
        )
    )
));
 
 /*$this->widget('ext.elFinder.ServerFileInput', array(
        'model' => $model,
        'attribute' => 'serverFile',
        'connectorRoute' => 'admin/elfinder/connector',
        )
);*/
 
// ElFinder widget
/*$this->widget('ext.elFinder.ElFinderWidget', array(
        'connectorRoute' => 'filemanager/connector',
        )
);*/
?>
</div>


<div class="span3">
	<div class="well">
		<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'Contenu'),
        //array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
        array('label'=>'Categories', 'icon'=>'folder-open', 'url'=>'#'),
        array('label'=>'Articles', 'icon'=>'file', 'url'=>'#'),
        array('label'=>'Fichiers'),
        array('label'=>'Manager', 'icon'=>'upload', 'url'=>'#'),
        array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
        array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
    ),
)); 
print_r($files);
?>

	</div>
</div>
