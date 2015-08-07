<?php
$this->breadcrumbs=array(
	'Scolors',
);

$this->menu=array(
	array('label'=>'Create Scolor','url'=>array('create')),
	array('label'=>'Manage Scolor','url'=>array('admin')),
);
?>

<h1>Scolors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
