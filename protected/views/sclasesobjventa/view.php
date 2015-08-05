<?php
$this->breadcrumbs=array(
	'Sclasesobjventas'=>array('index'),
	$model->id_clase_obj_venta,
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Actualizar','url'=>array('update','id'=>$model->id_clase_obj_venta)),
	array('label'=>'Eliminar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_clase_obj_venta),'confirm'=>'Está seguro de que desea eliminar este ítem?')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Clases Objetos de Venta</h3>
<h4>Vista #<?php echo $model->id_clase_obj_venta; ?></h4>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_clase_obj_venta',
		'desc_clase_obj_venta',
		'real_fict_clase_obj_venta',
		'diario_validar',
	),
)); ?>
