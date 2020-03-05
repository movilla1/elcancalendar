<?php
/* @var $this EventRulesController */
/* @var $model EventRules */

$this->breadcrumbs=array(
	'Event Rules'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Event Rules', 'url'=>array('index')),
	array('label'=>'Create Event Rules', 'url'=>array('create')),
	array('label'=>'Update Event Rules', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Event Rules', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Event Rules', 'url'=>array('admin')),
);
?>

<h1>View Event Rules #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'catid',
		'title',
		'description:html:Description',
	),
	//'htmlPurifierOptions'=>array('HTML.Allowed' => 'p,a[href],b,i,h1,h2,h3,h4,br,strong,center,table,td,tr,thead,tbody,ul,li,ol'),
)); ?>
