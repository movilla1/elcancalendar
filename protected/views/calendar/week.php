<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
		'Weekly Event Calendar'
);

$this->menu=array(
		array('label'=>'Full Calendar', 'url'=>array('index')),
		array('label'=>'Monthly Calendar', 'url'=>array('month')),
);
?>
<br/>
<h1>Weekly Event Calendar</h1>
<br/><br/>
<table class="weekcalendar">
<tr>
	<th>Sun.</th><th>Mond.</th><th>Tue.</th><th>Wed.</th><th>Thu.</th><th>Fri.</th><th>Sat.</th>
</tr>
<?php 
foreach ($calendar as $k=>$events) {
 	echo "<td>$events</td>";
}
?>
</table>