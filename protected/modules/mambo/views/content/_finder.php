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
        )
    )
));
 
?>
<div id="file-uploader"></div>
