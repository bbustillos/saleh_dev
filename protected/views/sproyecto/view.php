<?php
$this->breadcrumbs=array(
	'Sproyectos'=>array('index'),
	$model->id_proyecto,
);

$this->menu=array(
	array('label'=>'List Sproyecto','url'=>array('index')),
	array('label'=>'Create Sproyecto','url'=>array('create')),
	array('label'=>'Update Sproyecto','url'=>array('update','id'=>$model->id_proyecto)),
	array('label'=>'Delete Sproyecto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_proyecto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sproyecto','url'=>array('admin')),
);
?>

<h1>View Sproyecto #<?php echo $model->id_proyecto; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_proyecto',
		'id_empresa',
		'id_sucursal',
		'visible',
		'descripcion_proyecto',
		'no_contrato',
		'resolucion',
		'no_licitacion',
		'contratante',
		'garantia',
		'scontratista',
		'dpto',
		'lugar',
		'encargado',
		'fecha_inicial',
		'vencimiento',
		'supervisor',
		'moneda',
		'monto',
		'tipo_cambio',
		'historial',
		'por_defecto',
		'estado',
		'cambia',
		'motivos_i',
		'motivos_e',
	),
)); ?>
