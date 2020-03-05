<?php
/* @var $this EventRulesController */
/* @var $data EventRules */
?>
<?php 
$purifier = new CHtmlPurifier();
$purifier->options = array(
    'HTML.Allowed' => 'p,a[href],b,i,h1,h2,h3,h4,br,strong,center,table,td,tr,thead,tbody,ul,li,ol',
);
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catid')); ?>:</b>
	<?php if(isset($data->mycategory)) {
		echo CHtml::encode($data->mycategory->title); 
	}?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo $purifier->purify($data->description); ?>
	<br />


</div>