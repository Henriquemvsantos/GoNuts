<?php

/**
 * This is the model class for table "order_items".
 *
 * The followings are the available columns in table 'order_items':
 * @property integer $itemid
 * @property integer $orderid
 * @property integer $quantity
 * @property integer $userid
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property Order $order
 */
class OrderItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrderItems the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orderid, quantity, userid', 'required'),
			array('orderid, quantity, userid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('itemid, orderid, quantity, userid', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'userid'),
			'order' => array(self::BELONGS_TO, 'Order', 'orderid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'itemid' => 'Itemid',
			'orderid' => 'Orderid',
			'quantity' => 'Quantity',
			'userid' => 'Userid',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('itemid',$this->itemid);
		$criteria->compare('orderid',$this->orderid);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('userid',$this->userid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}