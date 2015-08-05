<?php
$this->breadcrumbs=array(
	'Scodobjventasdatoses',
);

$this->menu=array(
	array('label'=>'Create Scodobjventasdatos','url'=>array('create')),
	array('label'=>'Manage Scodobjventasdatos','url'=>array('admin')),
);
?>

<h1>Scodobjventasdatoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
