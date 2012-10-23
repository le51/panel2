<?php $this->beginContent('//layouts/main'); ?>
<div class="container" id="page">
	<div class="row content ">
	<div class="span9">

			<?php echo $content; ?>

	</div>
	<div class="span3">
		<div class="well">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
	</div>
	<?php $this->endContent(); ?>
</div>
</div>
