<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
'action'=>'protected/controllers/orderController/create',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Accept', array('name' => 'submit'));
		//CHtml::submitButton($model->isNewRecord ? 'Create Order' : 'Save',array('name'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->