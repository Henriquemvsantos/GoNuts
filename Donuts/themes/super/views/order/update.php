<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->orderid=>array('view','id'=>$model->orderid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'View Order', 'url'=>array('view', 'id'=>$model->orderid)),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>Update Order <?php echo $model->orderid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>