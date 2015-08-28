<?php
$this->breadcrumbs=array(
	'Parametrización de Sincronización',
);

$this->menu=array(
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h3>Parametrizaci&oacute;n de Sincronizaci&oacute;n</h3>
<h4>Lista</h4>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
