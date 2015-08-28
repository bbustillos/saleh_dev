<?php
$this->breadcrumbs=array(
	'Sincro Parametrizacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Actualizar','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Parametrizaci&oacute;n de Sincronizaci&oacute;n</h3>
<h4>Vista de Parametrizaci&oacute;n de Sincronizaci&oacute;n #<?php echo $model->id; ?></h4>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre_tabla',
		'campos_det',
	),
)); ?>
