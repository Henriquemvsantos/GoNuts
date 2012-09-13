<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<?php
echo "</br>"; 
echo CHtml::link('Manage Orders',array('order/admin')); 
echo "</br>";
echo CHtml::link('Manage Items',array('controller/action')); 
echo "</br>";
echo CHtml::link('Manage Users',array('controller/action')); 
echo "</br>";
echo CHtml::link('Overview',array('controller/action')); 





