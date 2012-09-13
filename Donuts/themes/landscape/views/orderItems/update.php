<?php
$this->breadcrumbs=array(
	'Order Items'=>array('index'),
	$model->order_position_id=>array('view','id'=>$model->order_position_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderItems', 'url'=>array('index')),
	array('label'=>'Create OrderItems', 'url'=>array('create')),
	array('label'=>'View OrderItems', 'url'=>array('view', 'id'=>$model->order_position_id)),
	array('label'=>'Manage OrderItems', 'url'=>array('admin')),
);
?>

<h1>Update OrderItems <?php echo $model->order_position_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>