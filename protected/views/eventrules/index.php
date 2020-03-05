<?php
/* @var $this EventRulesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Event Rules',
);

$this->menu=array(
	array('label'=>'Create Event Rules', 'url'=>array('create')),
	array('label'=>'Manage Event Rules', 'url'=>array('admin')),
);
?>

<h1>Event Rules</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
