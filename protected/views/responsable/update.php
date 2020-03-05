<?php
/* @var $this ResponsableController */
/* @var $model Responsable */

$this->breadcrumbs=array(
	'Responsables'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Responsable', 'url'=>array('index')),
	array('label'=>'Create Responsable', 'url'=>array('create')),
	array('label'=>'View Responsable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Responsable', 'url'=>array('admin')),
);
?>

<h1>Update Responsable <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>