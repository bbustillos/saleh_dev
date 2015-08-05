<?php
$this->breadcrumbs=array(
	'Scodobjventascaractextrases'=>array('index'),
	$model->id_cod_obj_venta_car_extra,
);

$this->menu=array(
	array('label'=>'List Scodobjventascaractextras','url'=>array('index')),
	array('label'=>'Create Scodobjventascaractextras','url'=>array('create')),
	array('label'=>'Update Scodobjventascaractextras','url'=>array('update','id'=>$model->id_cod_obj_venta_car_extra)),
	array('label'=>'Delete Scodobjventascaractextras','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cod_obj_venta_car_extra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scodobjventascaractextras','url'=>array('admin')),
);
?>

<h1>View Scodobjventascaractextras #<?php echo $model->id_cod_obj_venta_car_extra; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_cod_obj_venta_car_extra',
		'id_cod_obj_venta_car',
		'id_cod_obj_venta_extra',
		'observaciones',
	),
)); ?>
