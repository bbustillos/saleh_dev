<?php
$this->breadcrumbs=array(
	'Scodobjventascaracts',
);

$this->menu=array(
	array('label'=>'Create Scodobjventascaract','url'=>array('create')),
	array('label'=>'Manage Scodobjventascaract','url'=>array('admin')),
);
?>

<h1>Scodobjventascaracts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
