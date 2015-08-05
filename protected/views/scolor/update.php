<?php
$this->breadcrumbs=array(
	'Scolors'=>array('index'),
	$model->color_id=>array('view','id'=>$model->color_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scolor','url'=>array('index')),
	array('label'=>'Create Scolor','url'=>array('create')),
	array('label'=>'View Scolor','url'=>array('view','id'=>$model->color_id)),
	array('label'=>'Manage Scolor','url'=>array('admin')),
);
?>

<h1>Update Scolor <?php echo $model->color_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>