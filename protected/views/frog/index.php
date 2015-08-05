<?php
$this->breadcrumbs=array(
	'Frogs',
);

$this->menu=array(
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h1>Frogs</h1>
<h3>Objeto</h3>
<h4>Lista</h4>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
