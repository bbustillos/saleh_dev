<?php
$this->breadcrumbs=array(
	'Scodobjventascaractextrases',
);

$this->menu=array(
	array('label'=>'Create Scodobjventascaractextras','url'=>array('create')),
	array('label'=>'Manage Scodobjventascaractextras','url'=>array('admin')),
);
?>

<h1>Scodobjventascaractextrases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
