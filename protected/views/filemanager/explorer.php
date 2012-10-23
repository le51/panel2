<?php
/*$this->widget('application.extensions.cfilebrowser.CFileBrowserWidget',array(
                'script'=>array('filemanager/browserFileList'),
                'root'=>'uploads',
                'folderEvent'=>'click',
                'expandSpeed'=>1000,
                'collapseSpeed'=>1000,
                'expandEasing'=>'easeOutBounce',
                'collapseEasing'=>'easeOutBounce',
                'multiFolder'=>true,
                'loadMessage'=>'File Browser Is Loading...hang on a sec',
                'callbackFunction'=>'alert("I selected " + f)'
)); */


/*$this->widget('CTreeView',array(
        'data'=>$dataTree,
        'animated'=>'fast', //quick animation
        'collapsed'=>'false',//remember must giving quote for boolean value in here
        'htmlOptions'=>array(
                'class'=>'filetree',//there are some classes that ready to use
        ),
));*/
$this->widget('CTreeView',array(
	'url' => array('getTree'),
	'id'=>'node',
	'htmlOptions'=>array(
		'class'=>'treeview-famfamfam',//there are some classes that ready to use
	),
));

?>
