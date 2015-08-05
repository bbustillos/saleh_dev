<?php
$this->breadcrumbs=array(
	'Sip Hosts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Ver','url'=>array('view','id'=>$model->id)),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h1>Update SipHosts <?php echo $model->id; ?></h1>
<h3>Objeto</h3>
<h4>Actualizar SipHosts <?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>