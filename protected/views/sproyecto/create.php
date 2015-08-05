<?php
$this->breadcrumbs=array(
	'Sproyectos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sproyecto','url'=>array('index')),
	array('label'=>'Manage Sproyecto','url'=>array('admin')),
);
?>

<h1>Create Sproyecto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>