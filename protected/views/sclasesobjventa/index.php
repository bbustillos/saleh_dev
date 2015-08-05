<?php
$this->breadcrumbs=array(
	'Clases de Objeto de Ventas',
);

$this->menu=array(
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Clases Objetos de Venta</h3>
<h4>Lista</h4>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
