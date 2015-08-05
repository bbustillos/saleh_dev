<?php
$this->breadcrumbs=array(
	'Codificador Objeto de Ventas'=>array('index'),
	'Crear Nuevo',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Codificador Objeto de Ventas</h3>
<h4>Crear Nuevo</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>