<?php
/* @var $this EventsController */
/* @var $model Events */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coordinates'); ?>
		<?php echo $form->textField($model,'coordinates',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'evtdate'); ?>
		<?php echo $form->textField($model,'evtdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interested'); ?>
		<?php echo $form->textField($model,'interested'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'favourite'); ?>
		<?php echo $form->textField($model,'favourite'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remember'); ?>
		<?php echo $form->textField($model,'remember'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->