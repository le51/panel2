<?php
$this->widget('xupload.XUpload', array(
                    'url' => Yii::app()->createUrl("filemanager/simpleUpload"),
                    'model' => $model,
                    'attribute' => 'file',
                    'multiple' => true,
));
?>
