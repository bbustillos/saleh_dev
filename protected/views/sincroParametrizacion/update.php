<?php
$this->breadcrumbs=array(
	'Parametrización de Sincronización'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Ver','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Parametrizaci&oacute;n de Sincronizaci&oacute;n</h3>
<h4>Actualizar de Parametrizaci&oacute;n de Sincronizaci&oacute;n <?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>