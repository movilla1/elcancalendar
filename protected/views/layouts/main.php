<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo Yii::app()->name?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="images/Techmania.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/calendar.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/listings.css" media="screen, projection" />
</head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo-text"><?php echo Yii::app()->name ?></h1>
    <h2 id="slogan">Model Tournament Calendars made simple.</h2>
    <div id="header-tabs">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Events Calendar', 'url'=>array('/calendar')),
				array('label'=>'Export/Sync', 'url'=>array('/site/page',"view"=>"export")),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
			),
            'linkLabelWrapper' => 'span'
		)); ?>
    </div>
  </div>
  <div id="content-wrap">
    <div id="main"> 
        <?php echo $content; ?>
    </div>
    <div id="sidebar">
      <!-- <h1></h1> -->
      <?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
	  	if (!Yii::app()->user->isGuest) {	
			array_push($this->menu,	array('label'=>'Events Admin', 'url'=>array('/events/index'), 'visible'=>!Yii::app()->user->isGuest));
			array_push($this->menu,	array('label'=>'Rules Admin', 'url'=>array('/eventrules/index'), 'visible'=>!Yii::app()->user->isGuest));
			array_push($this->menu, array('label'=>'Categories  Admin', 'url'=>array('/categories/index'), 'visible'=>!Yii::app()->user->isGuest));
			array_push($this->menu, array('label'=>'Tournaments Admin', 'url'=>array('/tournaments/index'), 'visible'=>!Yii::app()->user->isGuest));
			array_push($this->menu, array('label'=>'Responsables Admin', 'url'=>array('/responsable/index'), 'visible'=>!Yii::app()->user->isGuest));
			array_push($this->menu, array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout')));
		} else {
			array_push($this->menu, array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest));
		}
		if (isset($this->menu)) {
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
		}
		$this->endWidget();
	?>
    </div>
  </div>
  <div id="footer"> 
   <span id="footer-left"> <strong><?php echo CHtml::encode( Yii::app()->name ); ?></strong> 
  	&copy;<?php echo date( 'Y', time() ); ?> by Elcansoftware | Design by: 
  	<strong><a href="http://www.styleshout.com/">styleshout</a></strong> | 
  	Valid: <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | 
  	<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> </span> 
  	<!-- <span id="footer-right"> <a href="http://www.free-css.com/">Home</a> | <a href="http://www.free-css.com/">Sitemap</a> | <a href="http://www.free-css.com/">Home</a> </span> -->
  </div> 
</div>
</body>
</html>
