<?php
/* @var $this EventRulesController */
/* @var $model EventRules */

$this->breadcrumbs=array(
	'Event Rules'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Event Rules', 'url'=>array('index')),
	array('label'=>'Create Event Rules', 'url'=>array('create')),
	array('label'=>'View Event Rules', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Event Rules', 'url'=>array('admin')),
);
?>

<h1>Update Event Rules <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>