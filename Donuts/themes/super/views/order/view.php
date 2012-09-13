<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->orderid,
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->orderid)),
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orderid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>View Order #<?php echo $model->orderid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orderid',
		'date_time',
		'total',
		'status',
	),
)); ?>
