<?php

class CalendarController extends Controller
{
	//public $layout='//layouts/main';
	public function actionIndex()
	{
		$criteria = new CDbCriteria;
		$criteria->order="evtdate ASC";
		//$events=Events::model()->findAll($criteria);
		//$model=Events::model();
		$provider=new CActiveDataProvider("Events", array(
				'criteria'=>$criteria,
		));
		$this->render("index",array("provider"=>$provider));
	}
	
	public function actionWeek() {
		$criteria = new CDbCriteria;
		$ts = time();
		$start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
		$weekstart=date('Y-m-d', $start);
		$weekEnds=date('Y-m-d', strtotime('next saturday', $start));
		$criteria->addBetweenCondition("evtdate", $weekstart, $weekEnds, 'AND');
		$criteria->order = "evtdate ASC";
		$events=Events::model()->findAll($criteria);
		$calendar=array("<div>","<div>","<div>","<div>","<div>","<div>","<div>");
		foreach ($events as $event) {
			$calendar[date("w",strtotime($event->evtdate))].="<span><a href='index.php?r=events/view&id={$event->id}'>".$event->title."</a></span>\n";
		}
		foreach ($calendar as $k=>$data) {
			$calendar[$k].="</div>\n";
		}
		$this->render("week",array("calendar"=>$calendar));
	}
	
	public function actionMonth($month=0,$year=0) {
		$criteria = new CDbCriteria;
		$ts = time();
		if ($month==0) $month=date("m");
		if ($year==0) $year=date("Y");
		$month=($month<10 && strlen($month)<2)? "0".$month:$month;
		$starttime=strtotime("$year-$month-01");
		$monthstr=date("F",$starttime);
		$start = date("Y-m-d",$starttime);
		$daysinmonth=date("t",$starttime);
		$endtime=strtotime("$year-$month-$daysinmonth");
		$end=date('Y-m-d', $endtime);
	
		$criteria->addBetweenCondition("evtdate", $start, $end, 'AND');
		$criteria->order="evtdate ASC";
		$events=Events::model()->findAll($criteria);
		
		$cal_start=date("w",$starttime);
		for ($i=0; $i<$cal_start;$i++) {
			$calendar[$i]="<td>&nbsp;</td>";
		}
		$dayc=1;
		for ($i=$cal_start;$i<$daysinmonth+$cal_start;$i++){
			//segment inside the calendar
			$calendar[$i]="<td><h3>$dayc</h3>";
			foreach ($events as $event) {
				$dday=($dayc<10)? "0".$dayc:$dayc;
				$curdate="$year-$month-$dday";
				//echo $curdate."<br/>";
				if ($event->evtdate==$curdate) {
					$calendar[$i].="<div><a href='index.php?r=events/view&id={$event->id}'>".$event->title."</a></div>";
				}
			}
			$calendar[$i].="</td>";
			$dayc++;
		}
		$rem=42-($daysinmonth+$cal_start);
		for ($i=0;$i<$rem;$i++) {
			$calendar[$cal_start+$daysinmonth+$i]="<td>&nbsp;</td>";
		}
		$this->render("month",array("calendar"=>$calendar,"month"=>$month,"year"=>$year,"monthstr"=>$monthstr));
	}
}