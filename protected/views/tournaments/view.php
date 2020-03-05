<?php
/* @var $this TournamentsController */
/* @var $model Tournaments */

$this->breadcrumbs=array(
	'Tournaments'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Tournaments', 'url'=>array('index')),
	array('label'=>'Create Tournaments', 'url'=>array('create')),
	array('label'=>'Update Tournaments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tournaments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tournaments', 'url'=>array('admin')),
);
?>

<h1>View Tournaments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'title',
		'description',
	),
)); ?>
