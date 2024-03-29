<?php
$this->breadcrumbs=array(
	'Medias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Media','url'=>array('index')),
	array('label'=>'Create Media','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('media-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Medias</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'media-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'created_at',
		'modified_at',
		'created_by',
		'modified_by',
		/*
		'reader_role',
		'editor_role',
		'manager_role',
		'title_fr',
		'description_fr',
		'title_de',
		'description_de',
		'title_en',
		'description_en',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
