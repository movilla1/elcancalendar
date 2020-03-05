<?php
/* @var $this ResponsableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Responsables',
);

$this->menu=array(
	array('label'=>'Create Responsable', 'url'=>array('create')),
	array('label'=>'Manage Responsable', 'url'=>array('admin')),
);
?>

<h1>Responsables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
