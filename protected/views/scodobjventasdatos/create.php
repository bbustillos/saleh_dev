<?php
$this->breadcrumbs=array(
	'Datos de Objeto de Ventas'=>array('index'),
	'Crear Nuevo',
);
$sIDCodObjVenta = (array_key_exists('id_cod_obj_venta', $_GET)?$_GET['id_cod_obj_venta']:$model->id_cod_obj_venta);

$this->menu=array(
	array('label'=>'Volver','url'=>array('/scodobjventas/'.$sIDCodObjVenta)),
);
?>

<h3>Datos de Objeto de Ventas</h3>
<h4>Crear Nuevo</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>