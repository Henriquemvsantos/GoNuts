<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
	'action'=>'index.php?r=order/create',
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row buttons span-24" align="center">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create Order' : 'Save',array('name'=>'submit')); 
		$this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Create A New Order',
		'type'=>'success', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'size'=>'large', // null, 'large', 'small' or 'mini'
		'buttonType'=>'submit',
		'htmlOptions'=>array('name'=>'submit'),
	));
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->