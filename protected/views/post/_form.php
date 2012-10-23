<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'category_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>244)); ?>
	<p>Introduction</p>
	<?php 
	
	Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
	$this->widget('ImperaviRedactorWidget',array(
		// you can either use it for model attribute
		'model'=>$model,
		'attribute'=>'intro',
		// or just for input field
		//'name'=>'my_input_name',
		// imperavi redactor {@link http://redactorjs.com/docs/ options}
		'options'=>array(
		    'lang'=>'fr',
		    //'toolbar'=>'mini',
		    //'css'=>'wym.css',
		),
	));
/*$this->widget('application.extensions.editMe.widgets.ExtEditMe', array(
    'model'=>$model,
    'attribute'=>'intro',
    'fullPage'=>false,
    'resizeMode'=>'both',
    'filebrowserImageBrowseLinkUrl'=>$this->createUrl("filemanager/fileUploaderConnector"),
    'toolbar'=>array(
        
		array(
                'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
        ),
        array(
                'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
        ),
        
        
       
        array(
                'Link', 'Unlink', 'Anchor','Image', 'Flash', 'Table', 'HorizontalRule',
        ),
        array(
                'Maximize', 'ShowBlocks', '-', 'About',
        ),
array(
                 'RemoveFormat','-','Source', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
        ),
        array(
                'Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt'
        ),

)
));
*/
?>
<p>Long Post</p>
	<?php /*$this->widget('ext.editMe.widgets.ExtEditMe', array(
    'model'=>$model,
    'attribute'=>'body',
    'fullPage'=>false,
    'resizeMode'=>'both',
    'filebrowserImageBrowseLinkUrl'=>$this->createUrl("site/fileUploaderConnector"),
    'toolbar'=>array(
        
		array(
                'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
        ),
        array(
                'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
        ),
        
        
       
        array(
                'Link', 'Unlink', 'Anchor','Image', 'Flash', 'Table', 'HorizontalRule',
        ),
        array(
                'Maximize', 'ShowBlocks', '-', 'About',
        ),
array(
                 'RemoveFormat','-','Source', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
        ),
        array(
                'Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt'
        ),

)
));*/
Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
$this->widget('ImperaviRedactorWidget',array(
    // you can either use it for model attribute
    'model'=>$model,
    'attribute'=>'body',
    // or just for input field
    //'name'=>'my_input_name',
    // imperavi redactor {@link http://redactorjs.com/docs/ options}
    'options'=>array(
        'lang'=>'fr',
        //'toolbar'=>'mini',
        //'css'=>'wym.css',
    ),
));
/*

$this->widget('ext.ckeditor.CKEditorWidget', array(
    'model' => $model,
    'attribute' => "body",
    'defaultValue' => $model->body,
    'config' => array(
        'height' => "400px",
        'width' => "100%",
        'language' => "fr",
        'filebrowserBrowseUrl' => $this->createUrl("filemanager/fileUploaderConnector"),
        'URL' => "uploads/",
        'toolbar'=>array(
			array(
		            'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock',
		    ),
		    array(
		            'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat',
		    ),
		    array(
		            'Link', 'Unlink', 'Anchor','Image', 'Flash', 'Table', 'HorizontalRule',
		    ),
		    array(
		            'Maximize', 'ShowBlocks', '-', 'About',
		    ),
			array(
		             'RemoveFormat','-','Source', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo',
		    ),
		    array(
		            'Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt'
		    ),
	),
    ),
))*/
?>

	<?php echo $form->checkBoxRow($model,'published'); ?>

	<?php //echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
