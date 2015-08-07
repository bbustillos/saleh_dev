<?php
$this->breadcrumbs=array(
	'Sip Hosts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h1>Create SipHosts</h1>
<h3>Objeto</h3>
<h4>Crear Nuevo</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>