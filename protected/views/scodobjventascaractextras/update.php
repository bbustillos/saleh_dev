<?php
$this->breadcrumbs=array(
	'Scodobjventascaractextrases'=>array('index'),
	$model->id_cod_obj_venta_car_extra=>array('view','id'=>$model->id_cod_obj_venta_car_extra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scodobjventascaractextras','url'=>array('index')),
	array('label'=>'Create Scodobjventascaractextras','url'=>array('create')),
	array('label'=>'View Scodobjventascaractextras','url'=>array('view','id'=>$model->id_cod_obj_venta_car_extra)),
	array('label'=>'Manage Scodobjventascaractextras','url'=>array('admin')),
);
?>

<h1>Update Scodobjventascaractextras <?php echo $model->id_cod_obj_venta_car_extra; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>