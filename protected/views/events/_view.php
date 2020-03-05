<?php
/* @var $this EventsController */
/* @var $data Events */

?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournamentid')); ?>:</b>
	<?php echo CHtml::encode($data->mytournament->title); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coordinates')); ?>:</b>
	<?php echo CHtml::encode($data->coordinates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php if (isset($data->myresponsable)) echo CHtml::encode($data->myresponsable->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evtdate')); ?>:</b>
	<?php echo CHtml::encode($data->evtdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php if (isset($data->mycategory)) echo CHtml::encode($data->mycategory->title); else echo "Top" ?>
	<br />

	<b><?php if (isset($data->eventlink)) {
		echo CHtml::encode($data->getAttributeLabel('eventlink')); 
	?>:</b>
	<a href='<?php echo CHtml::encode($data->eventlink); ?>'>Test the link here</a>
	<?php }?>
	<br />
	
	 <b><?php if (isset($data->notes)) {
		echo CHtml::encode($data->getAttributeLabel('notes')); 
	 	 }?>
	 </b>
	<br />
</div>