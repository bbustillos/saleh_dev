<?php
$this->breadcrumbs=array(
	'Sclasesobjventas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Clases Objetos de Venta</h3>
<h4>Crear Nuevo</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>