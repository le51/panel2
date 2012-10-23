<?php
        $this->widget('xupload.XUpload', array(
            'url' => Yii::app()->createUrl("filemanager/uploadAdditional", array("parent_id" => 1)),
            'model' => $model,//An instance of our model
            'attribute' => 'file',
            'multiple' => true,
            //Our custom upload template
            'uploadView' => 'application.views.filemanager.upload',
            //our custom download template
            'downloadView' => 'application.views.filemanager.download',
            'options' => array(//Additional javascript options
                //This is the submit callback that will gather
                //the additional data  corresponding to the current file
                'submit' => "js:function (e, data) {
                    var inputs = data.context.find(':input');
                    data.formData = inputs.serializeArray();
                    return true;
                }"
            ),
        ));
        //echo Yii::app()->getBaseUrl()."/xuploads/additional" ;echo Yii::app() -> getBasePath() . "/../xuploads/additional/"?>
