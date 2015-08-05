<?php
$this->breadcrumbs=array(
	'Scodobjventascaractextrases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scodobjventascaractextras','url'=>array('index')),
	array('label'=>'Manage Scodobjventascaractextras','url'=>array('admin')),
);
?>

<h1>Create Scodobjventascaractextras</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>