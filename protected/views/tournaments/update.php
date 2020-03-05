<?php
/* @var $this TournamentsController */
/* @var $model Tournaments */

$this->breadcrumbs=array(
	'Tournaments'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tournaments', 'url'=>array('index')),
	array('label'=>'Create Tournaments', 'url'=>array('create')),
	array('label'=>'View Tournaments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tournaments', 'url'=>array('admin')),
);
?>

<h1>Update Tournaments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>