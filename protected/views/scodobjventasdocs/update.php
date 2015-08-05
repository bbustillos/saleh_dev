<?php
$this->breadcrumbs=array(
	'Scodobjventasdocs'=>array('index'),
	$model->id_cod_obj_venta_doc=>array('view','id'=>$model->id_cod_obj_venta_doc),
	'Update',
);
$sIDCodObjVenta = (array_key_exists('id_cod_obj_venta', $_GET)?$_GET['id_cod_obj_venta']:$model->id_cod_obj_venta);

$this->menu=array(
	array('label'=>'Volver','url'=>array('/scodobjventas/'.$sIDCodObjVenta)),
	array('label'=>'Nuevo','url'=>array('create')),
);
?>

<h3>Datos del Objeto de Ventas</h3>
<h4>Actualizar id = <?php echo $model->id_cod_obj_venta_doc; ?></h4>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>