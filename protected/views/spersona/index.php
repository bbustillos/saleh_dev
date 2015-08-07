<?php
$this->breadcrumbs=array(
	'Spersonas',
);

$this->menu=array(
	array('label'=>'Create Spersona','url'=>array('create')),
	array('label'=>'Manage Spersona','url'=>array('admin')),
);
?>

<h1>Spersonas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
