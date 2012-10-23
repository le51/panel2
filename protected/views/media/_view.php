<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imageId')); ?>:</b>
	<?php echo CHtml::encode($data->imageId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_at')); ?>:</b>
	<?php echo CHtml::encode($data->modified_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reader_role')); ?>:</b>
	<?php echo CHtml::encode($data->reader_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editor_role')); ?>:</b>
	<?php echo CHtml::encode($data->editor_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manager_role')); ?>:</b>
	<?php echo CHtml::encode($data->manager_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_fr')); ?>:</b>
	<?php echo CHtml::encode($data->title_fr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_fr')); ?>:</b>
	<?php echo CHtml::encode($data->description_fr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_de')); ?>:</b>
	<?php echo CHtml::encode($data->title_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_de')); ?>:</b>
	<?php echo CHtml::encode($data->description_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_en')); ?>:</b>
	<?php echo CHtml::encode($data->title_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_en')); ?>:</b>
	<?php echo CHtml::encode($data->description_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>
