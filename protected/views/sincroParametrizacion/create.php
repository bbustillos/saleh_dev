<?php
$this->breadcrumbs=array(
	'Parametrización de Sincronización'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Parametrizaci&oacute;n de Sincronizaci&oacute;n</h3>
<h4>Crear Nuevo</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>