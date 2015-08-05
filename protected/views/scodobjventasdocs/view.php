<?php
$this->breadcrumbs=array(
	'Scodobjventasdocs'=>array('index'),
	$model->id_cod_obj_venta_doc,
);

$this->menu=array(
	array('label'=>'List Scodobjventasdocs','url'=>array('index')),
	array('label'=>'Create Scodobjventasdocs','url'=>array('create')),
	array('label'=>'Update Scodobjventasdocs','url'=>array('update','id'=>$model->id_cod_obj_venta_doc)),
	array('label'=>'Delete Scodobjventasdocs','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cod_obj_venta_doc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scodobjventasdocs','url'=>array('admin')),
);
?>

<h1>View Scodobjventasdocs #<?php echo $model->id_cod_obj_venta_doc; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_cod_obj_venta_doc',
		'id_cod_obj_venta',
		'documento',
		'validez',
		'requerido',
		'dias_alerta',
	),
)); ?>
