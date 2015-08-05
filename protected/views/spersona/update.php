<?php
$this->breadcrumbs=array(
	'Spersonas'=>array('index'),
	$model->id_persona=>array('view','id'=>$model->id_persona),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spersona','url'=>array('index')),
	array('label'=>'Create Spersona','url'=>array('create')),
	array('label'=>'View Spersona','url'=>array('view','id'=>$model->id_persona)),
	array('label'=>'Manage Spersona','url'=>array('admin')),
);
?>

<h1>Update Spersona <?php echo $model->id_persona; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>