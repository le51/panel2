<div class="view">


	<h3><?php echo CHtml::link(CHtml::encode(CHtml::encode($data->title)),array('view','id'=>$data->id)); ?></h3>
	Ecrit le:<?php echo $data->created;?><br />
	<?php echo $data->introtext; ?>



</div>
