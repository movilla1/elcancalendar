<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array('Monthly Event Calendar',);

$this->menu = array(
		array('label' => 'Full Calendar', 'url' => array('index')),
		array('label' => 'Weekly Calendar', 'url' => array('week')),);
?>
<script type="text/javascript">
 function loadnewcalendar() {
	 var melem=document.getElementById("mnth");
	 var yelem=document.getElementById("yrh");
	 var month=melem.options[melem.selectedIndex].value;
	 var year=yelem.options[yelem.selectedIndex].value;
	 location.href='<?php echo Yii::app()->getBaseUrl(true)."/index.php?r=calendar/month"; ?>&month='+month+'&year='+year;
 }
</script>
<br/>
<h1>Monthly Event Calendar</h1>
<br/>
<div style="text-align: center;">
 <strong style='font-size: 15pt;'><?php echo "$monthstr - $year";?></strong>&nbsp;
 <select name="month" onchange="loadnewcalendar()" id="mnth">
<?php
for ($i = 1; $i <= 12; $i++) {
	$monthc = ($i < 10) ? "0" . $i : $i;
	if ($month==$monthc) $selected="selected='selected'"; else $selected='';
	echo "<option value='$i' $selected>" . date("F", strtotime("2014-$monthc-01"))
			. "</option>\n";
}
?>  
 </select>&nbsp;&nbsp;
 <select name="year" onchange="loadnewcalendar()" id="yrh">
<?php
$ystart = $i = date("Y") - 1;
$yend = $ystart + 3;
for ($i = $ystart; $i < $yend; $i++) {
	if ($year==$i) 
		$selected="selected='selected'";
	else 
		$selected="";
	echo "<option value='$i' $selected>$i</option>\n";
}
?> 
 </select>
</div>
<br/>
<table class="weekcalendar">
<tr style="border: 1px solid black;">
	<th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th>
</tr>
<?php
foreach ($calendar as $k => $line) :
	if ($k % 7 == 0) {
		echo "<tr>";
	}
	echo $line;
	if ($k % 7 == 6) {
		echo "</tr>\n";
	}
endforeach;
?>
</table>