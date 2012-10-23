
<?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs', // 'tabs' or 'pills'
    'tabs'=>array(
        array('label'=>'Home', 'content'=>$this->renderPartial('_formFields',array('model'=>$model), $this), 'active'=>true),
        array('label'=>'Finder', 'content'=>$this->renderPartial('_finder',null, $this)),
    ),
)); ?>

