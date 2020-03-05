<?php
/* @var $this CalendarController */
/* @var $data CalendarItems */
?>
<div class="view">

<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evtdate')); ?>:</b>
	<?php echo CHtml::encode($data->evtdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mycategory.title')); ?>:</b>
	<?php echo CHtml::encode($data->mycategory->title); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('myresponsable.name')); ?>:</b>
	<?php echo CHtml::encode($data->myresponsable->name); ?>
	<br />
</div>