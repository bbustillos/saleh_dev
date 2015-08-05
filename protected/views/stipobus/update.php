<?php
$this->breadcrumbs=array(
	'Stipobuses'=>array('index'),
	$model->id_tipo_bus=>array('view','id'=>$model->id_tipo_bus),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stipobus','url'=>array('index')),
	array('label'=>'Create Stipobus','url'=>array('create')),
	array('label'=>'View Stipobus','url'=>array('view','id'=>$model->id_tipo_bus)),
	array('label'=>'Manage Stipobus','url'=>array('admin')),
);
?>

<h1>Update Stipobus <?php echo $model->id_tipo_bus; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>