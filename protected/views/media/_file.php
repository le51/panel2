 <?php
            $this->widget( 'xupload.XUpload', array(
                'url' => Yii::app( )->createUrl( "/media/upload"),
                //our XUploadForm
                'model' => $model,
                //We set this for the widget to be able to target our own form
                'htmlOptions' => array('id'=>'upload-form'),
                'attribute' => 'mediaFile',
                'multiple' => false,
                //Note that we are using a custom view for our widget
                //Thats becase the default widget includes the 'form' 
                //which we don't want here
                'formView' => 'application.views.media._uploadForm',
                )    
            );
            ?>
