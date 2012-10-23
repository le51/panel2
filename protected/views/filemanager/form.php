<fieldset>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
          'id' => 'somemodel-form',
          'enableAjaxValidation' => false,
            //This is very important when uploading files
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
      ?>    
        <div class="row">
        
            <?php echo realpath( Yii::app( )->getBasePath( )."/../tmp//");
            echo $form->labelEx($model,'title_fr'); ?>
            <?php echo $form->textField($model,'title_fr'); ?>
            <?php echo $form->error($model,'title_fr'); ?>
        </div>
        <!-- Other Fields... -->
        <div class="row">
            <?php echo $form->labelEx($model,'photos'); ?>
            <?php
            $this->widget( 'xupload.XUpload', array(
                'url' => Yii::app( )->createUrl( "/filemanager/upload1"),
                //our XUploadForm
                'model' => $photos,
                //We set this for the widget to be able to target our own form
                'htmlOptions' => array('id'=>'somemodel-form'),
                'attribute' => 'file',
                'multiple' => false,
                //Note that we are using a custom view for our widget
                //Thats becase the default widget includes the 'form' 
                //which we don't want here
                'formView' => 'application.views.filemanager._uploadForm',
                )    
            );
            ?>
        </div>
        <button type="submit">Submit</button>
    <?php $this->endWidget(); ?>
</fieldset>
