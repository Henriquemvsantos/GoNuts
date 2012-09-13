<div class="span-22">
<?php

$orderItems=Yii::app()->user->getState('orderItems');

 //$orderItems= $this->OrderItems;//CJSON::decode($orderItems);
 //print_r($orderItems);

	foreach($orderItems as $item){
		//print_r( $item);
		$item = (array)$item;
			//echo "</br> $item[itemName] - $item[qty]";
			
			echo $this->renderPartial('_summary_item',array('item'=>$item));
			//	Yii::app()->session['var'] = "</br> $item[name] - $item[qty]";
	}

 //$orderItems=CJSON::decode(Yii::app()->session['var'] );
		
		//foreach($this->orderItems as $item){
			 // echo "</br> $item[name] - $item[qty]";
		// }


?>
</div>