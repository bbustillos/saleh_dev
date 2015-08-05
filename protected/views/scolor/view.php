<?php
$this->breadcrumbs=array(
	'Scolors'=>array('index'),
	$model->color_id,
);

$this->menu=array(
	array('label'=>'List Scolor','url'=>array('index')),
	array('label'=>'Create Scolor','url'=>array('create')),
	array('label'=>'Update Scolor','url'=>array('update','id'=>$model->color_id)),
	array('label'=>'Delete Scolor','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->color_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scolor','url'=>array('admin')),
);
?>

<h1>View Scolor #<?php echo $model->color_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'color_id',
		'color_descripcion',
	),
)); ?>
