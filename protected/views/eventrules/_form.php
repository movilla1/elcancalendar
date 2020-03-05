<?php
/* @var $this EventrulesController */
/* @var $model Eventrules */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<link rel="stylesheet" href="assets/js/skins/compact/skin.css">
<div class="form">
<script src="assets/js/jquery.wymeditor.min.js"></script>
<?php $form = $this
		->beginWidget('CActiveForm',
				array('id' => 'rules-form', 
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation' => false,));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'catid'); ?>
		<?php echo $form
		->dropDownList($model, 'catid',
				CHtml::listData(Categories::model()->findAll(), "id", 'title'));
		?>
		<?php echo $form->error($model, 'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'title'); ?>
		<?php echo $form
		->textField($model, 'title', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'description'); ?>
		<?php echo $form
		->textArea($model, 'description',
				array('rows' => 6, 'cols' => 50, "class" => "wymeditor")); ?>
		<?php echo $form->error($model, 'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"wymupdate")); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
 <script type="text/javascript">
        /* Here we replace each element with class 'wymeditor'
         * (typically textareas) by a WYMeditor instance.
         *
         * We could use the 'html' option, to initialize the editor's content.
         * If this option isn't set, the content is retrieved from
         * the element being replaced.
         */
        $(function() {
            $('.wymeditor').wymeditor({  skin: 'compact',
                						toolsItems: [
                                                     {'name': 'Bold', 'title': 'Strong', 'css': 'wym_tools_strong'},
                                                     {'name': 'Italic', 'title': 'Emphasis', 'css': 'wym_tools_emphasis'},
                                                     {'name': 'CreateLink', 'title': 'Link', 'css': 'wym_tools_link'},
                                                     {'name': 'Unlink', 'title': 'Unlink', 'css': 'wym_tools_unlink'},
                                                     {'name': 'InsertImage', 'title': 'Image', 'css': 'wym_tools_image'},
                                                     {'name': 'InsertOrderedList', 'title': 'Ordered_List',
                                                         'css': 'wym_tools_ordered_list'},
                                                     {'name': 'InsertUnorderedList', 'title': 'Unordered_List',
                                                         'css': 'wym_tools_unordered_list'},
                                                     {'name': 'InsertTable', 'title': 'Table', 'css': 'wym_tools_table'},
                                                     {'name': 'Paste', 'title': 'Paste_From_Word',
                                                         'css': 'wym_tools_paste'},
                                                     {'name': 'Undo', 'title': 'Undo', 'css': 'wym_tools_undo'},
                                                     {'name': 'Redo', 'title': 'Redo', 'css': 'wym_tools_redo'}
                                                 ]
                                                 });
        });
 </script>
