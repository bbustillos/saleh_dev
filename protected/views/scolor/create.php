<?php
$this->breadcrumbs=array(
	'Scolors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scolor','url'=>array('index')),
	array('label'=>'Manage Scolor','url'=>array('admin')),
);
?>

<h1>Create Scolor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>