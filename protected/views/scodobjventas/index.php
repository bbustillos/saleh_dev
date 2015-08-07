<?php
$this->breadcrumbs=array(
	'Codificador Objeto de Ventas',
);

$this->menu=array(
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Codificador Objeto de Ventas</h3>
<h4>Lista</h4>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
