<div class="span3">




	<h3><?php echo CHtml::encode($data->title); ?></h3>
	Le <?php echo CHtml::encode($data->created_at); ?> dans <?php echo CHtml::encode($data->category->title); ?>
	<?php echo $data->body; ?>


</div>
