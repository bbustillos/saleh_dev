<?php
$this->breadcrumbs=array(
	'Stipobuses'=>array('index'),
	$model->id_tipo_bus,
);

$this->menu=array(
	array('label'=>'List Stipobus','url'=>array('index')),
	array('label'=>'Create Stipobus','url'=>array('create')),
	array('label'=>'Update Stipobus','url'=>array('update','id'=>$model->id_tipo_bus)),
	array('label'=>'Delete Stipobus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_bus),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stipobus','url'=>array('admin')),
);
?>

<h1>View Stipobus #<?php echo $model->id_tipo_bus; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_bus',
		'desc_tipo_bus',
	),
)); ?>
