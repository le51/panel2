<?php echo $form->dropDownListRow($model, 'reader_role', Rights::getAuthItemSelectOptions('2',array('Admin'))); ?>
<?php echo $form->dropDownListRow($model, 'editor_role', Rights::getAuthItemSelectOptions('2',array('Admin'))); ?>
<?php echo $form->dropDownListRow($model, 'manager_role', Rights::getAuthItemSelectOptions('2',array('Admin'))); ?>
