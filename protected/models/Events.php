<?php

/**
 * This is the model class for table "events".
 *
 * The followings are the available columns in table 'events':
 * @property integer $id
 * @property string $title
 * @property string $location
 * @property string $coordinates
 * @property integer $responsable
 * @property string $evtdate
 * @property integer $category
 * @property integer $interested
 * @property integer $favourite
 * @property integer $remember
 * @property String $eventlink
 * @property String $notes
 */
class Events extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'events';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, location, coordinates, responsable, evtdate, category', 'required'),
			array('responsable, category, tournamentid', 'numerical', 'integerOnly'=>true),
			array('title,notes', 'length', 'max'=>250),
			array('location, eventlink', 'length', 'max'=>255),
			array('coordinates', 'length', 'max'=>60),
			array("evtdate","date","format"=>"yyyy-MM-dd"),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, location, coordinates, myresponsable.name, evtdate, mycategory.title', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'myresponsable'=>array(self::BELONGS_TO,'Responsable','responsable'),
				'mycategory'=>array(self::BELONGS_TO,'Categories','category'),
				'mytournament'=>array(self::BELONGS_TO,'Tournaments','tournamentid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'location' => 'Location',
			'coordinates' => 'Coordinates',
			'responsable' => 'Responsable',
			'evtdate' => 'Event Date',
			'category' => 'Category',
			'interested' => 'Interested',
			'favourite' => 'Favourite',
			'remember' => 'Remember',
				'notes'=> 'Notes',
			'tournamentid'=>'Tournament',
				'eventlink'=>"Event Link",
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('coordinates',$this->coordinates,true);
		$criteria->compare('responsable',$this->responsable);
		$criteria->compare('evtdate',$this->evtdate,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('notes',$this->notes);
/*		$criteria->compare('interested',$this->interested);
		$criteria->compare('favourite',$this->favourite);
		$criteria->compare('remember',$this->remember);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Events the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
