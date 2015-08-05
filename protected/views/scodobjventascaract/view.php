<?php
$this->breadcrumbs=array(
	'Scodobjventascaracts'=>array('index'),
	$model->id_cod_obj_venta_car,
);

$this->menu=array(
	array('label'=>'List Scodobjventascaract','url'=>array('index')),
	array('label'=>'Create Scodobjventascaract','url'=>array('create')),
	array('label'=>'Update Scodobjventascaract','url'=>array('update','id'=>$model->id_cod_obj_venta_car)),
	array('label'=>'Delete Scodobjventascaract','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cod_obj_venta_car),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scodobjventascaract','url'=>array('admin')),
);
?>

<h1>View Scodobjventascaract #<?php echo $model->id_cod_obj_venta_car; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_cod_obj_venta_car',
		'id_cod_obj_venta',
		'id_tipo_bus',
		'cantidad_pisos',
		'carga_maxima',
		'imagen',
		'observaciones',
	),
)); ?>
