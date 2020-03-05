<?php
/* @var $this TournamentsController */
/* @var $model Tournaments */

$this->breadcrumbs=array(
	'Tournaments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tournaments', 'url'=>array('index')),
	array('label'=>'Manage Tournaments', 'url'=>array('admin')),
);
?>

<h1>Create Tournaments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>