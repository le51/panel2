<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
<?php /* $this->widget('ext.editMe.widgets.ExtEditMe', array(
    'model'=>$model,
    'attribute'=>'description',
    'fullPage'=>false,
    'resizeMode'=>'both',
    'toolbar'=>array(
        array(
                'Source', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
        ),
        array(
                'Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt'
        ),

        array(
                'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
        ),
        
        
        array(
                'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'BidiLtr',
        ),
        array(
                'Link', 'Unlink', 'Anchor',
        ),
        array(
                'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 
        ),
        array(
                'Maximize', 'ShowBlocks', '-', 'About',
        ),


)
));*/?>

<?php
$this->widget('application.widgets.redactorjs.Redactor', array( 
	'model' => $model,
	'attribute' => 'description',
	'editorOptions' => array( 
		'imageUpload' => Yii::app()->createAbsoluteUrl('filemanager/imageUpload'),
		'imageGetJson' => Yii::app()->createAbsoluteUrl('filemanager/listImages')
	),
));
?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
<?php
$files=CFileHelper::findFiles('uploads/tmp');
		$imagesItems=array();
		foreach($files as $cle=>$valeur)
		{
			$imagesItems[]=array('filelink'=>$valeur);
		}
		echo stripslashes(json_encode($imagesItems));
?>
