<?php
$this->breadcrumbs=array(
	'Scodobjventases'=>array('index'),
	$model->id_cod_obj_venta=>array('view','id'=>$model->id_cod_obj_venta),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Ver','url'=>array('view','id'=>$model->id_cod_obj_venta)),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Codificador Objeto de Ventas</h3>
<h4>Actualizar id = <?php echo $model->id_cod_obj_venta; ?></h4>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>