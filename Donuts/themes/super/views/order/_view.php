<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orderid), array('view', 'id'=>$data->orderid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>