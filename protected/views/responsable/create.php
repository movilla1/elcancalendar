<?php
/* @var $this ResponsableController */
/* @var $model Responsable */

$this->breadcrumbs=array(
	'Responsables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Responsable', 'url'=>array('index')),
	array('label'=>'Manage Responsable', 'url'=>array('admin')),
);
?>

<h1>Create Responsable</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>