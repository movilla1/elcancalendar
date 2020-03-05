<?php
/* @var $this EventsController */
/* @var $model Events */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->title,
);
if (!Yii::app()->user->isGuest) {
	$this->menu=array(
		array('label'=>'List Events', 'url'=>array('index')),
		array('label'=>'Create Events', 'url'=>array('create')),
		array('label'=>'Update Events', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Delete Events', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Events', 'url'=>array('admin')),
	);
}
?>

<h1>View Events #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'location',
		'coordinates',
		'myresponsable.name',
		'evtdate',
		'mycategory.title:text:Category',
		'mytournament.title:text:Tournament',
		'eventlink',
		'notes',
	),
)); ?>
<?php $parts=explode(",",$model->coordinates)?>
<br/>
<div style='text-align: center; font-weight: bold;'>
<a href="http://maps.google.com/?q=<?php echo trim($parts[0])."+".trim($parts[1])?>+(<?php echo $model->title?>)&t=h&z=10" target="_blank">See EVENT LOCATION in google maps</a>
</div>