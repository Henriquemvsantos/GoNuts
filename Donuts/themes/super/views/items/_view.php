<div class="span-6 append-1 prepend-1">


	<?php echo CHtml::link(CHtml::encode($data->item_id), array('view', 'id'=>$data->item_id)) ." - ". CHtml::encode($data->name); ?>
	<br />
	
	<div class="span-24">
	 <a  class="thumbnail" rel="tooltip" data-title="<?php echo $data->name; ?>">
        <img src="images/donuts/glazed.jpg" alt="" height="150px">
    </a>
	</div>
	<div class="span-24" align="center">
	<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
		'type' => 'primary',
		'toggle' => 'radio', // 'checkbox' or 'radio'
		'buttons' => array(
			array('label'=>'None','value'=>'0','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',"none");','id'=>'none_'.$data->item_id)),
			array('label'=>'One','value'=>'1','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',1);')),
			array('label'=>'Two','value'=>'2','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',2);')),
			array('label'=>'Three','value'=>'3','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',3);')),
			array('label'=>'Four','value'=>'4','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',4);')),
			array('label'=>'Five','value'=>'5','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',5);')),
			array('label'=>'More','value'=>'-1','htmlOptions'=>array('onclick'=>'updateItems(this,'.$data->item_id.',"more");')),
		),
		'size'=>'mini', // null, 'large', 'small' or 'mini'
		'htmlOptions'=>array('name'=>'option_'.$data->item_id,'id'=>'option_'.$data->item_id),
	
	)); 
	//echo $form->textFieldRow(new Items(), 'Please enter the quantity', array('class'=>'input-small','size' => 2,'name'=>'qty_'. $data->item_id,'id'=>'qty_'. $data->item_id,'style'=>'display:none'));
	
	echo CHtml::textField('Text', '',
									array('id'=>'qty_'. $data->item_id, 
									   'width'=>5, 
									   'style'=>'display:none',
									   'size' => 2,
									   'value' => '0',
									   'placeholder'=>'How Many?',
									   'onkeyup'=>'updateItems(this,'.$data->item_id.',"more");',
									   'maxlength'=>3));
	// $this->widget('CMaskedTextField', array(
	// //'model' => new,
	// 'attribute' => 'count',
	// 'mask' => '999',
	
	// //'placeholder'=>'lol',
	// 'htmlOptions' => array('size' => 2,'name'=>'qty_'. $data->item_id,'id'=>'qty_'. $data->item_id,'style'=>'display:none'),
	// ));
	?>
	<!--<input type="text" name="qty_<?php echo $data->item_id; ?>" id="qty_<?php echo $data->item_id; ?>" />-->
	<br />

	<input type="hidden" name="val_<?php echo $data->item_id; ?>" id="val_<?php echo $data->item_id; ?>" />
</div>

</div>