<?php
$this->breadcrumbs=array(
	'Sproyectos'=>array('index'),
	$model->id_proyecto=>array('view','id'=>$model->id_proyecto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sproyecto','url'=>array('index')),
	array('label'=>'Create Sproyecto','url'=>array('create')),
	array('label'=>'View Sproyecto','url'=>array('view','id'=>$model->id_proyecto)),
	array('label'=>'Manage Sproyecto','url'=>array('admin')),
);
?>

<h1>Update Sproyecto <?php echo $model->id_proyecto; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>