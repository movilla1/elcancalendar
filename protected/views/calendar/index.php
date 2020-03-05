<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Events Calendar',
);

$this->menu=array(
	array('label'=>'Weekly Calendar', 'url'=>array('week')),
	array('label'=>'Monthly Calendar', 'url'=>array('month')),
);
?>

<h1>Event Calendar</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'categories-grid',
	'dataProvider'=>$provider,
	'columns'=>array(
		'title',
		'evtdate',
		'mycategory.title:html:Category',
		'location',
		'myresponsable.name:html:Responsable',
	),
)); ?>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
