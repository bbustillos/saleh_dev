<?php
$this->breadcrumbs=array(
	'Spersonas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Spersona','url'=>array('index')),
	array('label'=>'Manage Spersona','url'=>array('admin')),
);
?>

<h1>Create Spersona</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>