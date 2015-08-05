<?php
$this->breadcrumbs=array(
	'Spersonas'=>array('index'),
	$model->id_persona,
);

$this->menu=array(
	array('label'=>'List Spersona','url'=>array('index')),
	array('label'=>'Create Spersona','url'=>array('create')),
	array('label'=>'Update Spersona','url'=>array('update','id'=>$model->id_persona)),
	array('label'=>'Delete Spersona','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_persona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spersona','url'=>array('admin')),
);
?>

<h1>View Spersona #<?php echo $model->id_persona; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_persona',
		'id_empresa',
		'id_sucursal',
		'tipo',
		'cod_cargo',
		'multi_suc',
		'nro_documento_identidad',
		'email_persona',
		'nombres_persona',
		'paterno_persona',
		'materno_persona',
		'direccion_persona',
		'fono_persona',
		'celular_persona',
		'autoriza_carga_pts',
		'autoriza_traspaso',
		'observaciones',
		'e_susuario',
		'fecha_nacimiento',
		'fecha_ingreso',
		'fecha_salida',
		'limite_credito',
		'pts_iniciales',
		'login',
		'password',
		'cod_nivel',
		'expirable',
		'dias_expiracion',
		'fecultcad_ambio',
		'cantidad_ingreso',
		'cantidad_salida',
		'max_ptos',
		'ingreso_externo',
		'nomimg',
		'id_tipo',
		'fecha',
		'upload',
		'estado',
		'cambia',
		'maqvir',
	),
)); ?>
