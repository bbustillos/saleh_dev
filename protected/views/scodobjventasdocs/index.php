<?php
$this->breadcrumbs=array(
	'Scodobjventasdocs',
);

$this->menu=array(
	array('label'=>'Create Scodobjventasdocs','url'=>array('create')),
	array('label'=>'Manage Scodobjventasdocs','url'=>array('admin')),
);
?>

<h1>Scodobjventasdocs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
