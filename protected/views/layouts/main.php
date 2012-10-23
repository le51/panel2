<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!--<div class="container-fluid topmenu"> -->

		
<?/*php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    //'collapse'=>true,
    'items'=>array(
				array('label'=>'Accueil '.$_SERVER["HTTP_HOST"], 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),

				array('label'=>'Administration', 'url'=>'#', 'items'=>array(
					'---',
					array('label'=>'Domaine'),
                    array('label'=>'Gérer le domaine', 'url'=>'#'),
                    array('label'=>'Gérer les comptes mails', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Bases de données'),
                    array('label'=>'PHPMYADMIN (mysql)', 'url'=>'#'),
                    array('label'=>'CHIVE (mysql)', 'url'=>'#'),
                    array('label'=>'PHPPGADMIN (postgrsql)', 'url'=>'#'),
                )),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
)); */?>

		

<!--</div> -->

 

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'null', // null or 'inverse'
    'brand'=>'Accueil '.$_SERVER["HTTP_HOST"],
    'brandUrl'=>array('/site/index'),
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        /*array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Panel', 'url'=>'#', 'items'=>array(
                	array('label'=>'Webmail', 'url'=>array('/panel/index','task'=>'roundcube')),
					'---',
					array('label'=>'Domaine', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Gérer le domaine', 'url'=>array('/panel'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Gérer les comptes mails', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Something else here', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                    array('label'=>'Bases de données', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'PHPMYADMIN (mysql)', 'url'=>array('/panel/index','task'=>'phpmyadmin'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'CHIVE (mysql)','url'=>array('/panel/index','task'=>'chive'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'PHPPGADMIN (postgrsql)', 'url'=>array('/panel/index','task'=>'phppgadmin'), 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                    array('label'=>'FIchiers', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Ajaxplorer', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest),
                )),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				//array('label'=>'Login', 'url'=>array('/site/login'),'visible'=>Yii::app()->user->isGuest),
            ),
        ),*/

        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            
            'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Ancien site ', 'url'=>'#','visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Articles', 'url'=>array('/mambo/content')),
                    array('label'=>'Nouvel article', 'url'=>array('/mambo/content/create')),
                    array('label'=>'Administrer', 'url'=>array('/mambo/content/admin')),
                    array('label'=>'Gallery', 'url'=>array('/filemanager/gallery')),
            	)),
				array('label'=>'Nouveau ', 'url'=>'#','visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Posts', 'url'=>array('/post/index')),
                    array('label'=>'Categories', 'url'=>array('/category/index')),
                    array('label'=>'Filemanager', 'url'=>array('/filemanager')),
                    array('label'=>'Gallery', 'url'=>array('/filemanager/gallery')),
                    '---',
            		array('label'=>'Logout '.Yii::app()->user->name, 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            	)),
                array('label'=>'Plannings', 'url'=>'#','visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Tous', 'url'=>array('/planning')),
                    array('label'=>'Mon planning', 'url'=>array('/planning/index','id_annu'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Instructeurs', 'url'=>array('/planning/index','id_group'=>'1'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Remorqueurs', 'url'=>array('/planning/index','id_group'=>'5'), 'visible'=>!Yii::app()->user->isGuest),
                )),
                array('label'=>'Annuaire', 'url'=>'#','visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Tous', 'url'=>array('/annuaire')),
                    array('label'=>'Mon profil', 'url'=>array('/annuaire/view','id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Instructeurs', 'url'=>array('/annuaire/index','id_group'=>'1'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Remorqueurs', 'url'=>array('/annuaire/index','id_group'=>'5'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'CA', 'url'=>array('/annuaire/index','id_group'=>'5'), 'visible'=>!Yii::app()->user->isGuest),
                )),
				array('label'=>'Panel', 'url'=>'#', 'items'=>array(
                	array('label'=>'Webmail', 'url'=>array('/panel/index','task'=>'roundcube')),
                	array('label'=>'Gérer les comptes mails', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest),
					'---',
					array('label'=>'Domaine', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Gérer le domaine', 'url'=>array('/panel'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Something else here', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                    array('label'=>'Bases de données', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'PHPMYADMIN (mysql)', 'url'=>array('/panel/index','task'=>'phpmyadmin'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'CHIVE (mysql)','url'=>array('/panel/index','task'=>'chive'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'PHPPGADMIN (postgrsql)', 'url'=>array('/panel/index','task'=>'phppgadmin'), 'visible'=>!Yii::app()->user->isGuest),
                    '---',
                    array('label'=>'FIchiers', 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Ajaxplorer', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest),
                )),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'),'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout '.Yii::app()->user->name, 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

                

            ),
        ),
    ),
)); ?>




	<?/*php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif*/?>

	<?php echo $content; ?>




</body>
</html>
