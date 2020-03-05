<?php
/* @var $this ResponsableController */
/* @var $model Responsable */

$this->breadcrumbs=array(
	'Responsables'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Responsable', 'url'=>array('index')),
	array('label'=>'Create Responsable', 'url'=>array('create')),
	array('label'=>'Update Responsable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Responsable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Responsable', 'url'=>array('admin')),
);
?>

<h1>View Responsable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'phone',
		'club',
	),
)); ?>
