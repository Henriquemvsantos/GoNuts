<?php
$this->breadcrumbs=array(
	'Order Items'=>array('index'),
	$model->itemid=>array('view','id'=>$model->itemid),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderItems', 'url'=>array('index')),
	array('label'=>'Create OrderItems', 'url'=>array('create')),
	array('label'=>'View OrderItems', 'url'=>array('view', 'id'=>$model->itemid)),
	array('label'=>'Manage OrderItems', 'url'=>array('admin')),
);
?>

<h1>Update OrderItems <?php echo $model->itemid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>