<?php
$this->breadcrumbs=array(
	'Sproyectos',
);

$this->menu=array(
	array('label'=>'Create Sproyecto','url'=>array('create')),
	array('label'=>'Manage Sproyecto','url'=>array('admin')),
);
?>

<h1>Sproyectos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
