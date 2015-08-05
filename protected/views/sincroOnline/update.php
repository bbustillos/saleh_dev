<?php
$this->breadcrumbs=array(
	'Sincro Onlines'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Ver','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h1>Update SincroOnline <?php echo $model->id; ?></h1>
<h3>Objeto</h3>
<h4>Actualizar SincroOnline <?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>