<?php
/* @var $this EventRulesController */
/* @var $model EventRules */

$this->breadcrumbs=array(
	'Event Rules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Event Rules', 'url'=>array('index')),
	array('label'=>'Manage Event Rules', 'url'=>array('admin')),
);
$model->isNewRecord=true;
?>

<h1>Create Event Rules</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>