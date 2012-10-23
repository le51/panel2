<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>


<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>




<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'horizontal',
)); ?>
 
<fieldset>
 
    <legend>Contact</legend>
 <p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

    <?php echo $form->textFieldRow($model, 'name'); ?>
    <?php echo $form->textFieldRow($model, 'email', array('prepend'=>'@')); ?>
    <?php echo $form->textFieldRow($model, 'subject'); ?>
    <?php echo $form->textAreaRow($model, 'body', array('class'=>'span8', 'rows'=>5)); ?>
    <?php echo $form->textFieldRow($model, 'email', array('prepend'=>'@')); ?>
	<?php if(CCaptcha::checkRequirements()): ?>

		<?php //echo $form->labelEx($model,'verifyCode'); ?>
		<div class="controls">
		<?php $this->widget('CCaptcha'); ?>
		
		</div>
		<?php echo $form->textFieldRow($model,'verifyCode'); ?>
		<div class="controls">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>

	<?php endif; ?>
</fieldset>
 
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
 
<?php $this->endWidget(); ?>


<?php endif; ?>
