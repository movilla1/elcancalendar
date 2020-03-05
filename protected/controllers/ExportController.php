<?php

class ExportController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionJson() {
		$connection=Yii::app()->db;
		$sql="SELECT * FROM categories";
		$command=$connection->createCommand($sql);
		$categories=$command->queryAll();
		$sql="SELECT * FROM responsable";
		$command=$connection->createCommand($sql);
		$responsables=$command->queryAll();
		$sql="SELECT * FROM events";
		$command=$connection->createCommand($sql);
		$events=$command->queryAll();
		$sql="SELECT * FROM tournaments";
		$command=$connection->createCommand($sql);
		$tournaments=$command->queryAll();
		$sql="SELECT * FROM eventrules";
		$command=$connection->createCommand($sql);
		$rules=$command->queryAll();
		$result=array("categories"=>$categories,"responsables"=>$responsables,"events"=>$events,"tournaments"=>$tournaments,"rules"=>$rules);
		$value=json_encode($result);
		echo $value;
		Yii::app()->end();
	}
}