<?php
$this->breadcrumbs=array(
	'Frogs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Actualizar','url'=>array('update','id'=>$model->id)),
	array('label'=>'Eliminar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h1>View Frog #<?php echo $model->id; ?></h1>
<h3>Objeto</h3>
<h4>Vista Frog #<?php echo $model->id; ?></h4>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'colour',
	),
)); ?>
