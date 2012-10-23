<?php
$this->breadcrumbs=array(
	'Medias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Media','url'=>array('index')),
	array('label'=>'Create Media','url'=>array('create')),
	array('label'=>'Update Media','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Media','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Media','url'=>array('admin')),
);
?>
<div class="row">
<h1>View Media #<?php echo $model->id; ?></h1>
	<div class="span4">
	<img src="<?php echo Yii::app()->getBaseUrl().'/media/images/'.$model->id.'/span4.jpg';?>">
	</div>
	<div class="span5">
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			//'imageId',
			//'path',
			array(
				'label'=>'Created at',
				'type'=>'raw',
				'value'=>CHtml::encode(date('d-m-Y' , $model->created_at)),
			),
			array(
				'label'=>'Created at',
				'type'=>'raw',
				'value'=>CHtml::encode(date('d-m-Y' , $model->modified_at)),
			),
			array(
				'label'=>'Created by',
				'type'=>'raw',
				'value'=>CHtml::encode($model->creator->nom_prenom),
			),
			array(
				'label'=>'Updated by',
				'type'=>'raw',
				'value'=>CHtml::encode($model->updator->nom_prenom),
			),
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
		),
	)); ?>
	</div>
</div>
