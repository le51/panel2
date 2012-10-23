
<?php 
$this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget', 
    array(
        'data'=>$model,
        'options'=>array(
            //'editable'=>true,
            'firstDay'=>1,
            'theme'=>false,
            'eventBorderColor'=>'#fff',
        ),
        'htmlOptions'=>array(
               'style'=>'width:100%;margin: 0 auto;'
        ),
    )
);
?>

