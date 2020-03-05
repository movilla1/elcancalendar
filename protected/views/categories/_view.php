<?php
/* @var $this CategoriesController */
/* @var $data Categories */
//var_dump($data);
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php if ($data->status==1) echo CHtml::encode("Enabled"); else echo CHtml::encode("Disabled"); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php 
	if (isset($data->myparent)){
		echo CHtml::encode($data->myparent->title); 
	} else echo "Top/Parent"?>
	<br />
 	
</div>