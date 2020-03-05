<?php
/* @var $this EventsController */
/* @var $model Events */
/* @var $form CActiveForm */
?>
<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAi-T4W543W4vGKBod7m4WPmc0f7eSbeqQ&sensor=false">
</script>
<script type="text/javascript">
function initialize() {
	 fromtextfield=$("#Events_coordinates").val();
	 if (fromtextfield.length > 6) {
		 parts=fromtextfield.split(",");
		 latitude=parts[0];
		 longitude=parts[1];
	 } else {
		 latitude=-34;
		 longitude=-65;
	 }
     var mapOptions = {
          center: new google.maps.LatLng(latitude,longitude),
          zoom: 6,
          mapTypeId: google.maps.MapTypeId.HYBRID
     };
     var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
     var markerD = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            title: 'Event Location',
            draggable: true
          });
     
     google.maps.event.addListener(markerD, "drag", function(e){
    	 document.getElementById("Events_coordinates").value=e.latLng.toUrlValue();
   	 });
    	
 }
 $(document).ready(function(){
	 initialize();
 });
 </script> 
     
<div class="form">
<?php $form = $this
		->beginWidget('CActiveForm',
				array('id' => 'events-form', 
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation' => false,));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'title'); ?>
		<?php echo $form
		->textField($model, 'title', array('size' => 60, 'maxlength' => 250));
		?>
		<?php echo $form->error($model, 'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'location'); ?>
		<?php echo $form
		->textField($model, 'location', array('size' => 60, 'maxlength' => 255));
		?>
		<?php echo $form->error($model, 'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'coordinates'); ?>
		<?php echo $form
		->textField($model, 'coordinates',
				array('size' => 60, 'maxlength' => 60));
		?>
		<?php echo $form->error($model, 'coordinates'); ?>

	</div>

	<div id="map_canvas" style="width: 100%; height: 400px; border:1px solid red;"></div>	
	<div class="row">
		<?php echo $form->labelEx($model, 'responsable'); ?>
		<?php echo $form
		->dropDownList($model, 'responsable',
				CHtml::listData(Responsable::model()->findAll(), "id", 'name'));
		?>
		<?php echo $form->error($model, 'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'evtdate'); ?>
		<?php //echo $form->textField($model, 'evtdate');
$minyear = date("Y");
$maxyear = date("Y") + 10;
$this
		->widget('zii.widgets.jui.CJuiDatePicker',
				array('name' => 'Events[evtdate]', 'flat' => false,
						//remove to hide the datepicker
						'value' => $model->evtdate,
						'options' => array('dateFormat' => 'yy-mm-dd',
								'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								'changeMonth' => true, 'changeYear' => true,
								'yearRange' => $minyear . ':' . $maxyear,
								//'minDate' => date("Y-m-d"),
								// minimum date
								'maxDate' => $maxyear . '-12-31', // maximum date

						), 'htmlOptions' => array('style' => ''),));
		?>
		<?php echo $form->error($model, 'evtdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'category'); ?>
		<?php echo $form
		->dropDownList($model, 'category',
				CHtml::listData(Categories::model()->findAll(), "id", 'title'));
		?>
		<?php echo $form->error($model, 'category'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model, 'tournamentid'); ?>
		<?php echo $form
		->dropDownList($model, 'tournamentid',
				CHtml::listData(Tournaments::model()->findAll(), "id", 'title'));
		?>
		<?php echo $form->error($model, 'tournamentid'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model, 'eventlink'); ?>
		<?php echo $form
		->textField($model, 'eventlink',
				array('size' => 60, 'maxlength' => 255));
		?>
		<?php echo $form->error($model, 'eventlink'); ?>

	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model, 'notes'); ?>
		<?php echo $form
		->textField($model, 'notes',
				array('size' => 60, 'maxlength' => 250));
		?>
		<?php echo $form->error($model, 'notes'); ?>

	</div>
		
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->