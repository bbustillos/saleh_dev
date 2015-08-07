<?php
$this->breadcrumbs=array(
	'Stipobuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stipobus','url'=>array('index')),
	array('label'=>'Manage Stipobus','url'=>array('admin')),
);
?>

<h1>Create Stipobus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>