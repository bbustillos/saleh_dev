<?php
$this->breadcrumbs=array(
	'Stipobuses',
);

$this->menu=array(
	array('label'=>'Create Stipobus','url'=>array('create')),
	array('label'=>'Manage Stipobus','url'=>array('admin')),
);
?>

<h1>Stipobuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
