
<?php Yii::app()->clientScript->registerScriptFile('../js/bootstrap-carousel', CClientScript::POS_HEAD);?>

<div class="span9">
	<ul class="thumbnails">
		<?php 
		//print_r($files);
		foreach($files as $cle=>$valeur) 
			{ 
			echo '<li class="span3">
					<a onclick="getContent(\''.$cle.'\'); return false;" href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
						<img id="'.$cle.'" src="../'.$valeur.'" alt="">
					</a>
				</li>'; 
			} 
		?>
	</ul>
	
	<ul class="nav nav-tabs">
  <li>
    <a href="#"><i class="icon-align-left"></i> </a>
  </li>
  <li><a href="#"><i class="icon-align-center"></i> </a></li>
  <li><a href="#"><i class="icon-align-right"></i> </a></li>
</ul>


</div>

<div class="span3">
	<div class="well">
		
		<?php $this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'list',
			'items'=>array(
				array('label'=>'Contenu'),
				//array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				array('label'=>'Categories', 'icon'=>'folder-open', 'url'=>'#'),
				array('label'=>'Articles', 'icon'=>'file', 'url'=>'#'),
				array('label'=>'Fichiers'),
				array('label'=>'Manager', 'icon'=>'upload', 'url'=>'#'),
				array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			),
		)); 
		?>
		<div class="btn-group">
		  <button class="btn"><i class="icon-align-left"></i> </button>
		  <button class="btn"><i class="icon-align-center"></i></button>
		  <button class="btn"><i class="icon-align-right"></i></button>
		</div>

	</div>
</div>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
<div class="modal-header">
	 <a class="close" data-dismiss="modal">&times;</a>
	<h4>Modal header</h4>
</div>
<div class="modal-body" >
	<div id="myCarousel" class="carousel slide">
		<!-- Carousel items -->
		<div class="carousel-inner">
		<?php foreach($files as $cle=>$valeur) 
			{ 
			echo '<div class="item" id="imgUpdate'.$cle.'">
					<img src="../'.$valeur.'" alt="">
				</div>'; 
			} 
		?>

	</div>
		<!-- Carousel nav -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
</div>
 
<div class="modal-footer">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Close',
		'url'=>'#',
		'htmlOptions'=>array('data-dismiss'=>'modal'),
	)); ?>
</div>
<?php $this->endWidget(); ?>

<script>
function getContent(x){
obj=document.getElementById(x);
up_obj=document.getElementById('imgUpdate'+x);
$('#imgUpdate'+x).toggleClass('active');
} 
</script>
