<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Merci!',
)); ?>
 
    <p>Merci aux développeurs de logiciels Open Source.</p>
   
<?php $this->endWidget(); ?>

<ul class="thumbnails">
    <li class="span4">
    <div class="thumbnail">
      <h3>Server</h3>
      <ul>
      	<li>Hébergement OVH</li>
      	<li>Debian linux</li>
      </ul>
      <h3>Informations légales</h3>
      <ul>
      	<li>Contact</li>
      	<li>Responsabilités</li>
      </ul>
    </div>
  </li>
  <li class="span4">
    <div class="thumbnail">
      <h3>Services</h3>
      <ul>
      	<li>Apache Web server</li>
      	<li>PHP</li>
      	<li>Mysql and Postgresql database</li>
      	<li>Bind name server</li>
      	<li>FTP</li>
      	<li>Mail</li>
      </ul>
    </div>
  </li>
    <li class="span4">
    <div class="thumbnail">
      <h3>Frameworks & webapp</h3>
      <ul>
      	<li>DTC control panel</li>
      	<li>Yii framework</li>
      	<li>Phalconphp framework</li>
      	<li>Joomla CMS</li>
      	<li>Ajaxplorer</li>
      	<li>Roundcube</li>
      </ul>
    </div>
  </li>
</ul>

