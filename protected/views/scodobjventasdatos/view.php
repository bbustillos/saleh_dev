<?php
$this->breadcrumbs=array(
	'Scodobjventasdatoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Scodobjventasdatos','url'=>array('index')),
	array('label'=>'Create Scodobjventasdatos','url'=>array('create')),
	array('label'=>'Update Scodobjventasdatos','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Scodobjventasdatos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scodobjventasdatos','url'=>array('admin')),
);
?>

<h1>View Scodobjventasdatos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_cod_obj_venta',
		'modelo',
		'numero_chasis',
		'marca',
		'color_id',
		'numero_motor',
	),
)); ?>
